@extends('layouts.app')

@section('title', __('Selling Requests'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Selling Requests',
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Selling Requests') }}</h6>
                </div>

                @livewire('sellings')
            </div>
        </div>
    </div>

    <!--begin::Modal - Show Request-->
    <div class="modal fade" id="kt_request_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="kt_request_model_header">
                    <h2 class="fw-bold">{{ __('Selling Request') }}</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body px-5 mb-5">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h4>{{ __('User Informations') }}</h4>
                        </div>
                        <div class="col-md-6 mb-4">
                            <p>
                                <span class="fs-5 fw-semibold mb-0 pb-0">{{ __('Name') }}: </span>
                                <span id="name"></span>
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <p>
                                <span class="fs-5 fw-semibold mb-0 pb-0">{{ __('Email Address') }}: </span>
                                <span id="email"></span>
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <p>
                                <span class="fs-5 fw-semibold mb-0 pb-0">{{ __('Phone Number') }}: </span>
                                <span id="phone"></span>
                            </p>
                        </div>

                        <div class="col-12 my-5">
                            <h4>{{ __('Property Information') }}</h4>
                        </div>
                        <div class="col-md-6 mb-4">
                            <p>
                                <span class="fs-5 fw-semibold mb-0 pb-0">{{ __('Location') }}: </span>
                                <span id="location"></span>
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <p>
                                <span class="fs-5 fw-semibold mb-0 pb-0">{{ __('Bedrooms') }}: </span>
                                <span id="bedrooms"></span>
                            </p>
                        </div>
                        <div class="col-md-12 mb-4">
                            <p>
                                <span class="fs-5 fw-semibold mb-0 pb-0">{{ __('Address') }}: </span>
                                <span id="address"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Show Request-->
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('show-request', (event) => {
                console.log(event.selling);
                $('#name').text(`${event.selling.first_name} ${event.selling.last_name}`);
                $('#email').text(event.selling.email);
                $('#phone').text(event.selling.phone);
                $('#location').text(event.selling.location.name);
                $('#location').text(event.selling.location.name);
                $('#bedrooms').text(event.selling.bedrooms);
                $('#address').text(event.selling.address);
                $('#kt_request_model').modal('show');
            });
        });
    </script>
@endpush
