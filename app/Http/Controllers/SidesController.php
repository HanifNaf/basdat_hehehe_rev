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
        $sides = DB::table('sides')->get();
        return view('sides', ['sides'=>$sides]);
    }

    // 
}
