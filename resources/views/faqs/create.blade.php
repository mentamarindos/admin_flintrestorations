@extends('layouts.app')

@section('title', __('FAQs'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Create FAQ',
        'btn_text' => __('Back'),
        'btn_link' => route('faqs.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Add FAQ') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('faqs.store') }}">
                        @csrf

                        {{-- Category --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('FAQ Category') }}</label>
                            <select name="category_id" id="category_id"
                                class="form-select form-select-solid @error('category_id') is-invalid @enderror" required>
                                <option value="">{{ __('Select Category of FAQ') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                        {{ __($category->name) }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Question --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Question') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('question') is-invalid @enderror"
                                id="question" placeholder="{{ __('Question') }}" name="question"
                                value="{{ old('question') }}" required>
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Answer --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Answer') }}</label>
                            <textarea class="form-control form-control-solid @error('answer') is-invalid @enderror" id="answer" name="answer"
                                placeholder="{{ __('Answer') }}" rows="5" required>{{ old('answer') }}</textarea>
                            @error('answer')
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
                                <span class="indicator-label">{{ __('Create FAQ') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
