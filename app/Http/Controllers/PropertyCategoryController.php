<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyCategoryRequest;
use App\Models\PropertyCategory;

class PropertyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('properties.categories.index', [
            'categories' => PropertyCategory::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyCategoryRequest $request)
    {
        PropertyCategory::create($request->validated());

        return to_route('properties.categories.index')->with('success', __('New Category Added Successfully!'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyCategory $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyCategory $category)
    {
        return view('properties.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyCategoryRequest $request, PropertyCategory $category)
    {
        $category->update($request->validated());

        return to_route('properties.categories.index')->with('success', __('Category Updated Successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyCategory $category)
    {
        try {
            $category->delete();
            return to_route('properties.categories.index')->with('success', __('Category Deletd Successfully!'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
