<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    function index(){
        $order = DB::table('orderitems')->latest('created_at')->first();

        $order_date = $order->created_at;

        $orderitems = DB::table('orderitems')->where('created_at', $order_date)->get();

        return view('payment', ['orders' => $order, 'orderitems'=>$orderitems]);
    }
}
