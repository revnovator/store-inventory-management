<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductStock;
use App\Models\ReturnProduct;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index() {
        $total_products = Product::count();
        $total_users = User::count();
        $total_stocks_in = ProductStock::where('status', ProductStock::STOCK_IN)->count();
        $total_return_products = ReturnProduct::count();
        $recents_products = Product::latest()->limit(10)->get();

        return view('dashboard', compact('total_products', 'total_users', 'total_return_products', 'total_stocks_in', 'total_return_products', 'recents_products'));
    }
}
