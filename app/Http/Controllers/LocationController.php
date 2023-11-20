<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    use FileUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('locations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationRequest $request)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $data['image'] = $this->fileUpload($request->image, 'locations');
        }

        Location::create($data);

        return to_route('locations.index')->with('success', __('New Location Created Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationRequest $request, Location $location)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $this->deleteFile($location->image);
            $data['image'] = $this->fileUpload($request->image, 'locations');
        }
        $location->update($data);

        return to_route('locations.index')->with('success', __('Location Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        try {
            $this->deleteFile($location->image);
            $location->delete();

            return back()->with('success', __('Location Deleted Successfully.'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
