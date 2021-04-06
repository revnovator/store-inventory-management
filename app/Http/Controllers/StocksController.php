<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StocksController extends Controller
{
    //
    public function stock() {
        return view('stocks.stock');
    }
}
