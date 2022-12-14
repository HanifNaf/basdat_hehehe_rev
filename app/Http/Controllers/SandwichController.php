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
        $sandwiches = DB::table('sandwich')->get();
        return view('sandwich', ['sandwiches' => $sandwiches]);
    }

    function store(Request $request)
    {
        $sandwiches = new Sandwich;
        $sandwiches->sandwich_id = $request->input('id');
        $sandwiches->bread = $request->input('bread');
        $sandwiches->size = $request->input('size');
        $sandwiches->extras = $request->input('extras');
        $sandwiches->veggies = $request->input('veggies');
        $sandwiches->sauces = $request->input('sauces');
        $sandwiches->save();

        return redirect('/sandwiches')->with('success');
        


    }
}
