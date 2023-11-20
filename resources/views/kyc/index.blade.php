@extends('layouts.app')

@section('title', __('KYC Requests'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'User Verifications',
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Requests') }}</h6>
                </div>

                @livewire('kyc.index')
            </div>
        </div>
    </div>

    <!--begin::Modal - Show Comment-->
    <div class="modal fade" id="kt_kyc_reason_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="kt_kyc_reason_model_header">
                    <h2 class="fw-bold">{{ __('User KYC Verification Result Comment') }}</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body px-5 mb-5">
                    <p id="comment" class="p-0 m-0"></p>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Show Comment-->

@endsection

@push('scripts')
    <script>
        function showComment(url) {
            $.ajax({
                url: url,
                success: function(res) {
                    $('#comment').text(res.kyc.reason);
                    $('#kt_kyc_reason_model').modal('show');
                },
            });


        }
    </script>
@endpush
