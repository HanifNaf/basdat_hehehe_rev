<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index(){
        $order = DB::table('orderitems')->latest('created_at')->first();

        $order_date = $order->created_at;

        $orderitems = DB::table('orderitems')->where('created_at', $order_date)->get();
        
        $sumprice = DB::table('orderitems')->where('created_at', $order_date)->sum('product_price');

        return view('payment', ['orders' => $order, 'orderitems'=>$orderitems, 'totalprice'=>$sumprice]);
    }

    public function store(Request $request)
    {
        $persons = new Payment;
        $persons->order_id = $request->input('order_id');
        $persons->total_price = $request->input('total_price');
        $persons->payment_type = $request->input('payment');
        $persons->person_name = $request->input('nama');
        $persons->email = $request->input('email');
        $persons->age = $request->input('age');
        $persons->gender = $request->input('gender');
        $persons->city = $request->input('city');
        $persons->save();

        return redirect('menu')->with('success');

    }
}
