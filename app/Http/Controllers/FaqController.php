<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Requests\FaqRequest;
use App\Models\Category;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('faqs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faqs.create', [
            'categories' => Category::select(['id', 'name'])->whereShow(true)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        Faq::create($request->validated());

        return to_route('faqs.index')->with('success', __('FAQ Created Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        $categories = Category::select(['id', 'name'])->whereShow(true)->get();

        return view('faqs.edit', compact('faq', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());

        return to_route('faqs.index')->with('success', __('FAQ Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        try {
            $faq->delete();

            return to_route('faqs.index')->with('success', __('FAQ Deleted Successfully.'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
