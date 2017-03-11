<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Products\CreateRequest;

use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::paginate();

    	return view('admin.products.index', compact('products'));
    }

    public function create()
    {
    	$categories = Category::get();
    	return view('admin.products.create', compact('categories'));
    }

    public function store(CreateRequest $request)
    {
    	$product = new Product();

    	$product->fill($request->only('value', 'category_id'));

    	if ($product->save()) {

            // save translations
            $product->translateOrNew('en')->title = $request->get('title');
            $product->translateOrNew('en')->description = $request->get('description');

            if ($request->has('title_fr')) {
                $product->translateOrNew('fr')->title = $request->get('title_fr');
            }

            if ($request->has('description_fr')) {
                $product->translateOrNew('fr')->description = $request->get('description_fr');
            }

            $product->save();

    		return redirect()->route('products.index')->with('success', 'Product created.');
    	}
    }
}
