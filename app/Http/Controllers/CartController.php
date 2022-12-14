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
                $type = $request->input('product_type_id');
                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity');

                $quantity_cart = $quantity + 1;

                // sandwich details
                $bread = $request->input('bread');
                $size = $request->input('size');

                if ($size == 'Footlong'){
                    $price_size = $price * 2;
                } else{
                    $price_size = $price;
                }
                
                // extras
                $extras = $request->input('extras');
                if (empty($extras)) {
                    $price_extras = $price_size + (0*5000);
                }else{
                    $price_extras = $price_size + (count($extras)*5000);
                }

                $veggies = $request->input('veggies');
                $sauces = $request->input('sauces');


                $product_array = array(
                    'id' => $id,
                    'type' => $type,
                    'name' => $name,
                    'image' => $image,
                    'price' => $price_extras,
                    'quantity' => $quantity_cart,
                    'bread' => $bread,
                    'size' => $size,
                    'extras' => $extras,
                    'veggies' => $veggies,
                    'sauces' => $sauces,

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
            $type = $request->input('product_type_id');

            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');

            $quantity_cart = $quantity + 1;

            // sandwich details
            $bread = $request->input('bread');
            $size = $request->input('size');

            if ($size == 'Footlong'){
                $price_size = $price * 2;
            } else{
                $price_size = $price;
            }

            // Extras
            $extras = $request->input('extras');
            if (empty($extras)) {
                $price_extras = $price_size + (0*5000);
            }else{
                $price_extras = $price_size + (count($extras)*5000);
            }

            $veggies = $request->input('veggies');
            $sauces = $request->input('sauces');


            $product_array = array(
                'id' => $id,
                'type' => $type,
                'name' => $name,
                'image' => $image,
                'price' => $price_extras,
                'quantity' => $quantity_cart,
                'bread' => $bread,
                'size' => $size,
                'extras' => $extras,
                'veggies' => $veggies,
                'sauces' => $sauces,
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
                $product_type = $product['type'];
                $product_name = $product['name'];
                $product_price = $product['price'];
                $product_quantity = $product['quantity'];
                $product_image = $product['image'];

                // sandwich details
                $product_bread = $product['bread'];
                $product_size = json_encode($product['size']);
                $product_extras = json_encode($product['extras']);
                $product_veggies = json_encode($product['veggies']);
                $product_sauces = json_encode($product['sauces']);

                DB::table('orderitems')->insert([
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'product_type_id' => $product_type,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_image' => $product_image,
                    'product_quantity' => $product_quantity,
                    'bread' => $product_bread,
                    'size' => $product_size,
                    'extras' => $product_extras,
                    'veggies' => $product_veggies,
                    'sauces' => $product_sauces,
                    'order_date' => date('Y-m-d')
                ]);
                $prod_quantity = DB::table('menu')->where(['product_id' => $cart[$id] ])->value('stock');
                DB::table('menu')->where(['product_id' => $cart[$id]])->update(['stock' => $prod_quantity - $product_quantity]);

                unset($cart[$id]);
                $request->session()->put('cart', $cart);
                $this->calculateTotalCart($request);

            }
            return redirect('/person');
        } else {
            return redirect('/');
        }
    }
}
