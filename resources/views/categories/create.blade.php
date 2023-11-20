@extends('layouts.app')

@section('title', __('Categories'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Create New Category',
        'btn_text' => __('Back'),
        'btn_link' => route('categories.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Add Category') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        {{-- Name --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Category Name') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" id="name"
                                placeholder="{{ __('Category Name') }}" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Category Description') }}</label>
                            <textarea type="text" class="form-control form-control-solid @error('description') is-invalid @enderror"
                                id="description" placeholder="{{ __('Category Description') }}" name="description" rows="3" required>{{ old('description') }}</textarea>
                            @error('description')
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


                        <!--begin::Actions-->
                        <div class="text-center py-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">{{ __('Create Category') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
