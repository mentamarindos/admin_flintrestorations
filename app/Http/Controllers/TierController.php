<?php

namespace App\Http\Controllers;

use App\Http\Requests\TierRequest;
use App\Models\Tier;
use Illuminate\Http\Request;

class TierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tiers.index', [
            'tiers' => Tier::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TierRequest $request)
    {
        Tier::create($request->validated());

        return to_route('tiers.index')->with('success', __('Investment Plan Created Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tier $tier)
    {
        return view('tiers.show', compact('tier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tier $tier)
    {
        return view('tiers.edit', compact('tier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TierRequest $request, Tier $tier)
    {
        $tier->update($request->validated());

        return to_route('tiers.index')->with('success', __('Investment Plan Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tier $tier)
    {
        try {
            $tier->delete();

            return back()->with('success', __('Investment Plan Deleted Successfully.'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
