@extends('layouts.app')

@section('title', __('Countries'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Cities',
        'btn_text' => __('Back'),
        'btn_link' => route('countries.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Cities of ') }}{{ $country->name }}</h6>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_city">
                        <i class="ki-duotone ki-plus fs-2"></i>{{ __('Add City') }}</button>
                </div>

                @livewire('country.cities', ['country' => $country])
            </div>
        </div>

        @include('countries.add-city')
        @include('countries.update-city')
    </div>
@endsection

@push('scripts')
    <script>
        function editCity(id) {
            // console.log(id);
            $('#kt_modal_update_city').modal('show');
            Livewire.dispatch('city-edit', {
                id: id
            });
        }
    </script>
@endpush
