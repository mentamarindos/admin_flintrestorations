@extends('layouts.app')

@section('title', __('Testimonials'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Testimonials',
        'btn_text' => __('Add New'),
        'btn_link' => route('testimonials.create'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Testimonials') }}</h6>
                </div>

                @livewire('testimonials')
            </div>
        </div>
    </div>

    <!--begin::Modal - Show Feedback-->
    <div class="modal fade" id="kt_feedback_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="kt_feedback_model_header">
                    <h2 class="fw-bold">{{ __('Feedback') }}</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body px-5 mb-5">
                    <p id="feedback" class="p-0 m-0"></p>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Show Feedback-->
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('show-feedback', (event) => {
                $('#feedback').text(event.feedback);
                $('#kt_feedback_model').modal('show');
            });
        });
    </script>
@endpush
