<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::paginate();
    	return view('admin.products.index', compact('products'));
    }
}
