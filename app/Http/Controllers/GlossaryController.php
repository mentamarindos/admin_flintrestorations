<?php

namespace App\Http\Controllers;

use App\Http\Requests\GlossaryRequest;
use App\Models\Glossary;
use Illuminate\Http\Request;

class GlossaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('glossaries.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('glossaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GlossaryRequest $request)
    {
        Glossary::create($request->validated());

        return to_route('glossaries.index')->with('success', __('New Glossary Created Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Glossary $glossary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Glossary $glossary)
    {
        return view('glossaries.edit', compact('glossary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GlossaryRequest $request, Glossary $glossary)
    {
        $glossary->update($request->validated());

        return to_route('glossaries.index')->with('success', __('Glossary Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Glossary $glossary)
    {
        try {
            $glossary->delete();

            return to_route('glossaries.index')->with('success', __('Glossary Deleted Successfully.'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
