<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Categories\CreateRequest;

use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = Category::paginate();
    	return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(CreateRequest $request)
    {
    	$category = new Category();

    	$category->fill($request->all());

    	if ($category->save()) {
    		return redirect()->route('categories.index')->with('success', 'Cagtegory created.');
    	}
    }
}
