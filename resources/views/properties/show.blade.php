@extends('layouts.app')

@section('title', __('Properties'))
@push('styles')
    <style>
        #map {
            height: 40%;
        }
    </style>
@endpush
@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Properties',
        'btn_text' => __('Back'),
        'btn_link' => route('properties.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            @include('properties.partials.navbar')

            @if (request()->tab === 'overview' || !request()->tab)
                @include('properties.partials.overview')
            @elseif (request()->tab === 'investors')
                {{-- @include('properties.partials.investors') --}}
                @livewire('properties.investors', ['property' => $property])
            @elseif (request()->tab === 'files')
                @include('properties.partials.files')
            @elseif (request()->tab === 'activity')
                @include('properties.partials.activity')
            @endif

        </div>
    </div>

@endsection

{{-- <script>
    function initMap() {
        const myLatLng = {
            lat: -25.363,
            lng: 131.044
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: myLatLng,
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello World!",
        });
    }

    window.initMap = initMap;
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_map_key') }}&callback=initMap&v=weekly"
    defer></script> --}}
