<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenityRequest;
use App\Models\Amenity;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('amenities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('amenities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmenityRequest $request)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $data['image'] = $this->fileUpload($request->image, 'amenities');
        }

        Amenity::create($data);

        return to_route('amenities.index')->with('success', __('Amenity Created Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Amenity $amenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amenity $amenity)
    {
        return view('amenities.edit', compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AmenityRequest $request, Amenity $amenity)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $data['image'] = $this->fileUpload($request->image, 'amenities');
            $this->deleteFile($amenity->image);
        }

        $amenity->update($data);

        return to_route('amenities.index')->with('success', __('Amenity Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amenity $amenity)
    {
        try {
            $this->deleteFile($amenity->image);
            $amenity->delete();

            return to_route('amenities.index')->with('success', __('Amenity Deleted Successfully.'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
