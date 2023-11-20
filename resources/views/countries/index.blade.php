@extends('layouts.app')

@section('title', __('Countries'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Countries',
        'is_model' => true,
        'model_btn_text' => __('Add New'),
        'model_id' => 'kt_modal_add_country',
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Countries') }}</h6>
                </div>

                @livewire('country.index')
            </div>
        </div>

        @include('countries.add')
        @include('countries.edit')
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('country-created', (event) => {
                $('#kt_modal_add_country_form').attr('action', '{{ route('countries.store') }}');
                $('#kt_modal_add_country_form').submit();
            });
            Livewire.on('country-update', (event) => {
                $('#kt_modal_update_country_form').attr('action', event.url);
                $('#kt_modal_update_country_form').submit();
            });
        });

        function editCountry(id) {
            $('#kt_modal_edit_country').modal('show');
            Livewire.dispatch('country-edit', {
                id: id
            });
        }
    </script>
@endpush
