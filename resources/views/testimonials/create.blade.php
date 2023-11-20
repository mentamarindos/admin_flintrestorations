@extends('layouts.app')

@section('title', __('Testimonials'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Create Testimonial',
        'btn_text' => __('Back'),
        'btn_link' => route('testimonials.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Add New Testimonial') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- Name --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('User Name') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" id="name"
                                placeholder="{{ __('User Name') }}" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Feedback --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Feedback') }}</label>
                            <textarea class="form-control form-control-solid @error('feedback') is-invalid @enderror" id="feedback" name="feedback"
                                placeholder="{{ __('Feedback') }}" rows="5" required>{{ old('feedback') }}</textarea>
                            @error('feedback')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Feedback Date --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Feedback Date ') }}</label>
                            <input type="date"
                                class="form-control form-control-solid @error('feedback_date') is-invalid @enderror"
                                id="feedback_date" name="feedback_date" value="{{ old('feedback_date') }}" required>
                            @error('feedback_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Rating Starts --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Rating Stars') }}</label>
                            <select name="stars" id="stars"
                                class="form-select form-select-solid @error('stars') is-invalid @enderror" required>
                                <option value="">{{ __('Select Rating Star') }}</option>
                                <option value="1" @selected(old('stars') == '1')>1</option>
                                <option value="2" @selected(old('stars') == '2')>2</option>
                                <option value="3" @selected(old('stars') == '3')>3</option>
                                <option value="4" @selected(old('stars') == '4')>4</option>
                                <option value="5" @selected(old('stars') == '5')>5</option>
                            </select>
                            @error('stars')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Show/Hide --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Show / Hide') }}</label>
                            <select name="show" id="show"
                                class="form-select form-select-solid @error('show') is-invalid @enderror" required>
                                <option value="">{{ __('Select Status') }}</option>
                                <option value="1" @selected(old('show') == '1')>{{ __('Show') }}</option>
                                <option value="0" @selected(old('show') == '0')>{{ __('Hide') }}</option>
                            </select>
                            @error('show')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- User Image --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('User Image') }}</label>
                            <input type="file"
                                class="form-control form-control-solid @error('image') is-invalid @enderror" id="image"
                                name="image" required>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!--begin::Actions-->
                        <div class="text-center py-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">{{ __('Create Testimonial') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
