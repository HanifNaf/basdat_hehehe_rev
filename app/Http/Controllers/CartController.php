<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // RETURN CART HTML
    function index()
    {
        return view('cart');
    }

    // ADD TO CART FUNCTION
    public function add_to_cart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');

            $products_array_ids = array_column($cart, 'id');

            $id = $request->input('id');

            if (!in_array($id, $products_array_ids)) {
                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity');

                $quantity_cart = $quantity + 1;

                $product_array = array(
                    'id' => $id,
                    'name' => $name,
                    'image' => $image,
                    'price' => $price,
                    'quantity' => $quantity_cart,
                );

                $cart[$id] = $product_array;
                $request->session()->put('cart', $cart);
                $this->calculateTotalCart($request);
            } else {
                echo '<script>alert("product is already in cart")</script>';
            }

            return view('cart');
        } else {
            $cart = array();

            $id = $request->input('id');
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');

            $quantity_cart = $quantity + 1;


            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price,
                'quantity' => $quantity_cart
            );
            $cart[$id] = $product_array;

            $request->session()->put('cart', $cart);
            $this->calculateTotalCart($request);

            return view('cart');
        }
    }

    // CALCULATE TOTAL HARGA FUNCTION
    function calculateTotalCart(Request $request)
    {
        $cart = $request->session()->get('cart');
        $total_price = 0;
        $total_quantity = 1;

        foreach ($cart as $id => $product) {
            $product = $cart[$id];
            $price = $product['price'];
            $quantity = $product['quantity'];

            $total_price = $total_price + ($price * $quantity);
            $total_tax = ($total_price * 0.11);
            $total_price_after_tax = $total_price + $total_tax;
            $total_quantity = $total_quantity + $quantity;
        }

        $request->session()->put('total', $total_price);
        $request->session()->put('quantity', $total_quantity);
    }

    // REMOVE PRODUCT FROM CART FUNCTION
    function remove_from_cart(Request $request)
    {

        if ($request->session()->has('cart')) {
            $id = $request->input('id');
            $cart = $request->session()->get('cart');

            unset($cart[$id]);

            $request->session()->put('cart', $cart);
            $this->calculateTotalCart($request);
        }
        return view('cart');
    }

    // EDIT PRODUCT QUANTITY FUNCTION
    function edit_product_quantity(Request $request)
    {
        if ($request->session()->has('cart')) {
            $product_id = $request->input('id');
            $product_quantity = $request->input('quantity');

            if ($request->has('decrease_product_quantity_btn')) {
                $product_quantity = $product_quantity - 1;
            } else if ($request->has('increase_product_quantity_btn')) {
                $product_quantity = $product_quantity + 1;
            } else {
            }

            if ($product_quantity <= 0) {
                $this->remove_from_cart($request);
            }

            $cart = $request->session()->get('cart');

            if (array_key_exists($product_id, $cart)) {
                $cart[$product_id]['quantity'] = $product_quantity;
                $request->session()->put('cart', $cart);
                $this->calculateTotalCart($request);
            }
        }
        return view('cart');
    }

    // PLACE ORDER FUNCTION
    function place_order(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            $order_id = rand(0, 99999);

            foreach ($cart as $id => $product) {

                $product = $cart[$id];
                $product_id = $product['id'];
                $product_name = $product['name'];
                $product_price = $product['price'];
                $product_quantity = $product['quantity'];
                $product_image = $product['image'];

                DB::table('orderitems')->insert([
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_image' => $product_image,
                    'product_quantity' => $product_quantity,
                    'order_date' => date('Y-m-d')
                ]);

                unset($cart[$id]);
                $request->session()->put('cart', $cart);
            }
            return redirect('/menu');
        } else {
            return redirect('/');
        }
    }
}
