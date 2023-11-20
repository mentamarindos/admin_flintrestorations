@extends('auth.layouts.app')


@section('content')
    <div class="w-lg-500px p-10">
        @if (session('error'))
            <span class="text-danger"> {{ session('error') }}</span>
        @endif

        <form class="form w-100" id="kt_new_password_form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <div class="text-center mb-10">
                <h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
            </div>
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="fv-row mb-8">
                <input type="email" placeholder="Enter Email Address" name="email" autocomplete="off"
                    class="form-control bg-transparent @error('email') is-invalid @enderror"
                    value="{{ $email ?? old('email') }}" required />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="fv-row mb-8" data-kt-password-meter="true">
                <div class="mb-1">
                    <div class="position-relative mb-3">
                        <input class="form-control bg-transparent @error('password') is-invalid @enderror" type="password"
                            placeholder="Password" name="password" autocomplete="off" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                            data-kt-password-meter-control="visibility">
                            <i class="ki-duotone ki-eye-slash fs-2"></i>
                            <i class="ki-duotone ki-eye fs-2 d-none"></i>
                        </span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                </div>

                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>

            </div>
            <div class="fv-row mb-8">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off"
                    class="form-control bg-transparent" />
            </div>

            <div class="d-grid mb-10">
                <button type="submit" id="kt_new_password_submit" class="btn btn-primary">
                    <span class="indicator-label">Reset Password</span>
                </button>
            </div>
        </form>
    </div>
@endsection
