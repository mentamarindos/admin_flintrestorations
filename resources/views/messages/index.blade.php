@extends('layouts.app')

@section('title', __('User Messages'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'User Messages',
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('User Messages') }}</h6>
                </div>

                @livewire('messages')
            </div>
        </div>
    </div>

    <!--begin::Modal - Show Message-->
    <div class="modal fade" id="kt_message_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="kt_message_model_header">
                    <h2 class="fw-bold">{{ __('Message') }}</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body px-5 mb-5">
                    <p>
                        <span class="fs-4 fw-semibold mb-0 pb-0">{{ __('Subject') }}: </span>
                        <span id="subject"></span>
                    </p>
                    <p id="message" class="p-0 m-0"></p>

                    <div class="mt-5">
                        <button class="btn btn-primary"
                            onclick="document.getElementById('update-form').submit();">{{ __('Make Read') }}</button>
                        <a href="" id="reply" class="btn btn-primary">{{ __('Reply back to user email') }}</a>
                    </div>

                    <form id="update-form" method="POST">
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Show Message-->
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('show-message', (event) => {
                $('#update-form').attr('action', event.url);
                $('#reply').attr('href', `mailto:${event.message.email}`);
                $('#subject').text(event.message.subject);
                $('#message').text(event.message.message);
                $('#kt_message_model').modal('show');
            });
        });
    </script>
@endpush
