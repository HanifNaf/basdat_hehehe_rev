<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BeverageController extends Controller
{
    // return HTML
    function index()
    {
        // $beverages = DB::table('menu')->get();
        $beverages = DB::select('select * from menu where product_type_id = 2');
        return view('beverage', ['beverages' => $beverages]);
    }
}
