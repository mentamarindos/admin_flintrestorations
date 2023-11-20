@extends('layouts.app')

@section('title', __('Users List'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Users',
        'is_model' => true,
        'model_btn_text' => __('Add New'),
        'model_id' => 'kt_modal_add_user',
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Users') }}</h6>
                </div>

                @livewire('users.index')
            </div>
        </div>

        @include('users.add')
        @include('users.edit')
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('user-created', (event) => {
                $('#kt_modal_add_user_form').attr('action', '{{ route('users.store') }}');
                $('#kt_modal_add_user_form').submit();
            });
            Livewire.on('user-update', (event) => {
                $('#kt_modal_update_user_form').attr('action', event.url);
                $('#kt_modal_update_user_form').submit();
            });
        });

        function editModel(id) {
            // console.log(id);
            $('#kt_modal_edit_user').modal('show');
            Livewire.dispatch('user-edit', {
                id: id
            });
        }
    </script>
@endpush
