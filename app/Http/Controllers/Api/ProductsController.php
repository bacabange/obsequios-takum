<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
    	\App::setLocale($request->get('lang'));

    	$products = Product::translatedIn('fr')->get();
    	return response()->json($products);
    }
}
