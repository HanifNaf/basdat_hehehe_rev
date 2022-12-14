<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SidesController extends Controller
{
    // return HTML
    function index()
    {
        $sides = DB::select('select * from menu where product_type_id = 3');

        return view('sides', ['sides'=>$sides]);
    }

    // 
}
