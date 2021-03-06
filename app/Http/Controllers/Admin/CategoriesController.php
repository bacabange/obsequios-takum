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

    	$category->fill($request->only('name'));

    	if ($category->save()) {
            // save translations
            $category->translateOrNew('en')->name = $request->get('name');

            if ($request->has('name_fr')) {
                $category->translateOrNew('fr')->name = $request->get('name_fr');
            }

            $category->save();

    		return redirect()->route('categories.index')->with('success', 'Cagtegory created.');
    	}
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // save translations
        $category->translate('en')->name = $request->get('name');

        if ($request->has('name_fr')) {
            $category->translate('fr')->name = $request->get('name_fr');
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Cagtegory updated.');
    }
}
