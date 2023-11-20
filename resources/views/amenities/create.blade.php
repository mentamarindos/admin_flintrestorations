@extends('layouts.app')

@section('title', __('Amenities'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Create New Amenity',
        'btn_text' => __('Back'),
        'btn_link' => route('amenities.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Add Amenity') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('amenities.store') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Name --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Amenity Name') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" id="name"
                                placeholder="{{ __('Amenity Name') }}" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Amenity Image --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Amenity Image') }}</label>
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
                                <span class="indicator-label">{{ __('Create Amenity') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
