<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePasswordRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the profile page.
     *
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Update the admin profile.
     *
     */
    public function update(ProfileRequest $request)
    {
        $request->user()->update($request->validated());

        return back()->with('success', __('Profile Updated Successfully.'));
    }

    /**
     * Update the admin profile password.
     *
     */
    public function updatePassword(ProfilePasswordRequest $request)
    {
        $data = $request->validated();
        if ($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $request->user()->update($data);

        return back()->with('success', __('Password Updated Successfully.'));
    }
}
