@extends('layouts.app')

@section('title', __('KYC Requests'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'User KYC Details',
        'btn_text' => __('Back'),
        'btn_link' => route('kyc.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('KYC Details') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('kyc.update', $kyc) }}">
                        @csrf
                        @method('put')

                        {{-- KYC Passport Image --}}
                        <div class="row mb-10">
                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('User Name') }}: <span
                                        class="fw-semibold">{{ $kyc->user->name }}</span>
                                </h4>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Name on Passport') }}: <span
                                        class="fw-semibold">{{ $kyc->name }}</span>
                                </h4>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Father Name') }}: <span
                                        class="fw-semibold">{{ $kyc->father_name }}</span>
                                </h4>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Date of Birth') }}: <span
                                        class="fw-semibold">{{ $kyc->dob->toFormattedDateString() }}</span>
                                </h4>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Gender') }}: <span
                                        class="fw-semibold">{{ $kyc->gender }}</span>
                                </h4>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Passport Issue Country') }}: <span
                                        class="fw-semibold">{{ $kyc->issue_country }}</span>
                                </h4>
                            </div>

                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Passport Number') }}: <span
                                        class="fw-semibold">{{ $kyc->passport_number }}</span>
                                </h4>
                            </div>

                            <div class="col-md-6 mb-5">
                                <h4 class="fw-semibold">{{ __('Passport Expity Date') }}: <span
                                        class="fw-semibold">{{ $kyc->passport_expiry->toFormattedDateString() }}</span>
                                </h4>
                            </div>

                            <div class="col-md-12 mb-5 mt-5">
                                <img src="{{ $kyc->passport }}" alt="Passport Image" class="img-fluid rounded">
                            </div>

                        </div>

                        {{-- KYC Result --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('KYC Result') }}</label>
                            <select name="result" id="result"
                                class="form-select form-select-solid @error('result') is-invalid @enderror" required>
                                <option value="">{{ __('Select Result') }}</option>
                                <option value="verified" @selected(old('result', $kyc->result) === 'verified')>{{ __('Verified') }}</option>
                                <option value="rejected" @selected(old('result', $kyc->result) === 'rejected')>{{ __('Rejected') }}</option>
                            </select>
                            @error('result')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Reason --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('KYC Result Comment') }}</label>
                            <textarea class="form-control form-control-solid @error('reason') is-invalid @enderror" id="reason" name="reason"
                                placeholder="{{ __('KYC Result Comment') }}" rows="5" required>{{ old('reason', $kyc->reason) }}</textarea>
                            @error('reason')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center py-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">{{ __('Update Result') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
