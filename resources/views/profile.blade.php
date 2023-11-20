@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    @include('partials.breadcrumbs', ['title' => 'Profile'])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            {{-- Page Content --}}
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="{{ auth()->user()->gravatar }}">
                        <span class="font-weight-bold mt-3">{{ auth()->user()->name }}</span>

                        <span class="text-black-50">{{ auth()->user()->email }}</span>
                    </div>
                </div>
                <div class="col-md-9 border-right">
                    {{-- Profile --}}
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">{{ __('Profile') }}</h4>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-12 mb-4">
                                    <label class="labels">{{ __('Name') }}</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="{{ __('Full Name') }}"
                                        value="{{ old('name', auth()->user()->name) }}">

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="labels">{{ __('Email Address') }}</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', auth()->user()->email) }}"
                                        placeholder="{{ __('Email Address') }}">

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="labels">{{ __('Phone Number') }}</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ old('phone', auth()->user()->phone) }}"
                                        placeholder="{{ __('Phone Number') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button"
                                    type="submit">{{ __('Update Profile') }}</button>
                            </div>
                        </form>
                    </div>

                    <hr>
                    {{-- Change Password --}}
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">{{ __('Change Password') }}</h4>
                        </div>

                        <form action="{{ route('profile.change-password') }}" method="POST">
                            @csrf
                            <div class="row mt-2">

                                <div class="col-md-12 mb-4">
                                    <label class="labels">{{ __('New Password') }}</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        placeholder="*********">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="labels">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror" required
                                        placeholder="*********">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button"
                                    type="submit">{{ __('Change Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
