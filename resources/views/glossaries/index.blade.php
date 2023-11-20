@extends('layouts.app')

@section('title', __('Glossary'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Glossary',
        'btn_text' => __('Add New'),
        'btn_link' => route('glossaries.create'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Glossaries') }}</h6>
                </div>

                @livewire('glossary')
            </div>
        </div>
    </div>

    <!--begin::Modal - Show Glossary-->
    <div class="modal fade" id="kt_glossary_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="kt_glossary_model_header">
                    <h2 class="fw-bold">{{ __('Glossary') }}</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body px-5 mb-5">
                    <p>
                        <span class="fs-4 fw-semibold mb-0 pb-0" id="word"></span>
                        <span id="description"></span>
                    </p>
                    <p id="explanation" class="p-0 m-0"></p>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Show Glossary-->
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('show-glossary', (event) => {
                $('#word').text(`${event.glossary.word}:`);
                $('#description').text(event.glossary.description);
                $('#explanation').html(event.glossary.explanation);
                $('#kt_glossary_model').modal('show');
            });
        });
    </script>
@endpush
