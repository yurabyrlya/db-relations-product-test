<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use phpDocumentor\Reflection\Types\This;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.list', ['data' => ProductCategory::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();
        $category = new ProductCategory();
        $category->name = $validated['name'];
        $category->save();

        return redirect()->route('category.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductCategory $category
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $category)
    {
        return view('category.edit', ['category' => $category ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateProductCategoryRequest $request
     * @param ProductCategory $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $category)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();
        $category->update($validated);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductCategory $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
