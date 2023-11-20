<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Traits\FileUpload;

class TestimonialController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('testimonials.index', [
            'testimonials' => Testimonial::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $data['image'] = $this->fileUpload($request->image, 'testimonials');
        }

        Testimonial::create($data);

        return to_route('testimonials.index')->with('success', __('Testimonial Created Successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $data['image'] = $this->fileUpload($request->image, 'testimonials');
        }
        $testimonial->update($data);

        return to_route('testimonials.index')->with('success', __('Testimonial Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        try {
            $this->deleteFile($testimonial->image);
            $testimonial->delete();

            return back()->with('success', __('Testimonial Deleted Successfully.'));
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
