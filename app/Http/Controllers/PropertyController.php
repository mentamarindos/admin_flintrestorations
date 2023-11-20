<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('properties.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->validated());

        return to_route('properties.index')->with('success', __('New Property Added Successfully!'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        $property->load(['country', 'city', 'amenities', 'documents', 'investments.user']);
        $property->loadSum('investments', 'amount');

        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        $property->load(['images', 'videos', 'amenities', 'documents']);

        return view('properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        dd($request->validated());

        return to_route('properties.index')->with('success', __('New Property Updated Successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        try {
            // deleteing all images of property
            foreach ($property->images as $image) {
                $this->deleteFile($image->filename);
                $image->delete();
            }

            // deleteing all videos of property
            foreach ($property->videos as $video) {
                $this->deleteFile($video->filename);
                $video->delete();
            }

            // deleteing all documents of property
            foreach ($property->documents as $document) {
                $this->deleteFile($document->filename);
                $document->delete();
            }

            // deleteing all amenities of property
            $property->amenities()->delete();

            $property->delete();
            return back()->with('success', __('Property Deletd Successfully!'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
