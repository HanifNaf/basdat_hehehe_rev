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
        $beverages = DB::table('beverage')->get();
        return view('beverage', ['beverages' => $beverages]);
    }
}
