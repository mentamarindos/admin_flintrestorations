@extends('layouts.app')

@section('title', __('Amenities'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Amenities',
        'btn_text' => __('Add New'),
        'btn_link' => route('amenities.create'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Amenities') }}</h6>
                </div>

                @livewire('amenities')

            </div>
        </div>
    </div>

    <!--begin::Modal - Show Amenity-->
    <div class="modal fade" id="kt_amenity_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="kt_amenity_model_header">
                    <h2 class="fw-bold">{{ __('Amenity') }}</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body px-5 mb-5">
                    <h4 id="name" class="my-5"></h4>
                    <img src="" alt="Image" class="img-fluid rounded" id="image">

                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Show Amenity-->

@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('show-amenity', (event) => {
                $('#image').attr('src', event.image);
                $('#name').text(event.name);
                $('#kt_amenity_model').modal('show');
            });
        });
    </script>
@endpush
