@extends('layouts.app')

@section('title', __('Glossary'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Edit Glossary',
        'btn_text' => __('Back'),
        'btn_link' => route('glossaries.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Update Glossary') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('glossaries.update', $glossary) }}">
                        @csrf
                        @method('put')
                        {{-- Word --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Word') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('word') is-invalid @enderror" id="word"
                                placeholder="{{ __('Word') }}" name="word" value="{{ old('word', $glossary->word) }}"
                                required>
                            @error('word')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Word Description') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('description') is-invalid @enderror"
                                id="description" placeholder="{{ __('Word Description') }}" name="description"
                                value="{{ old('description', $glossary->description) }}" required>
                            <small class="text-primary">{{ __('Very small description of word') }}</small>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Explanations --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Word Explanation') }}</label>
                            <textarea class="form-control form-control-solid @error('explanation') is-invalid @enderror" id="explanation"
                                name="explanation" placeholder="{{ __('Explanation') }}" rows="5" required>{{ old('explanation', $glossary->explanation) }}</textarea>
                            <small class="text-primary">{{ __('Detail explanation of word') }}</small>
                            @error('explanation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        {{-- Show/Hide --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Show / Hide') }}</label>
                            <select name="show" id="show"
                                class="form-select form-select-solid @error('show') is-invalid @enderror" required>
                                <option value="">{{ __('Select Status') }}</option>
                                <option value="1" @selected(old('show', $glossary->show) == '1')>{{ __('Show') }}</option>
                                <option value="0" @selected(old('show', $glossary->show) == '0')>{{ __('Hide') }}</option>
                            </select>
                            @error('show')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!--begin::Actions-->
                        <div class="text-center py-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">{{ __('Update Glossary') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#explanation'), {
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                ],
            });
    </script>
@endpush
