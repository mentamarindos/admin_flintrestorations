@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')
    <!--begin::Wrapper-->
    <div class="w-lg-500px p-10">
        <!--begin::Form-->
        <form class="form w-100" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-11">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder mb-3">{{ __('Sign In') }}</h1>
                <!--end::Title-->
            </div>
            <!--begin::Heading-->

            <div class="fv-row mb-8">
                <input type="email" placeholder="Enter Email Address" name="email" autocomplete="off"
                    class="form-control bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    required />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="fv-row mb-3">
                <input type="password" placeholder="Password" name="password" autocomplete="off"
                    class="form-control bg-transparent @error('password') is-invalid @enderror" required />
            </div>

            <div class="fv-row mb-3">
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="remember" @checked(old('remember')) />
                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">{{ __('Remember Me') }}
                </label>
            </div>

            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div></div>
                <a href="{{ route('password.request') }}" class="link-primary">{{ __('Forgot Password ?') }}</a>
            </div>

            <div class="d-grid mb-10">
                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                    <span class="indicator-label">{{ __('Sign In') }}</span>
                </button>
            </div>
    </div>
    <!--end::Wrapper-->

@endsection
