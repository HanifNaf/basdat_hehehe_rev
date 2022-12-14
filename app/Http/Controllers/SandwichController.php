<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sandwich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SandwichController extends Controller
{
    // return HTML
    function index()
    {
        $sandwiches = DB::select('select * from menu where product_type_id = 1');

        return view('sandwich', ['sandwiches' => $sandwiches]);
    }

}
