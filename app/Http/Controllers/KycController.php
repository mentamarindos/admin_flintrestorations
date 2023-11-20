<?php

namespace App\Http\Controllers;

use App\Http\Requests\KycUpdateRequest;
use App\Models\Kyc;
use Illuminate\Http\Request;

class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kyc.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kyc $kyc)
    {
        return response()->json([
            'kyc' => $kyc
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kyc $kyc)
    {
        $kyc->load('user');
        return view('kyc.edit', compact('kyc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KycUpdateRequest $request, Kyc $kyc)
    {
        $kyc->update($request->validated());

        return to_route('kyc.index')->with('success', 'User KYC Verification ' . ucfirst($request->result));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kyc $kyc)
    {
        //
    }
}
