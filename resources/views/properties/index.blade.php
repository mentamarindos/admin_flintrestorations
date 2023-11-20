@extends('layouts.app')

@section('title', __('Properties'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Properties',
        'btn_text' => __('Add New'),
        'btn_link' => route('properties.create'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Properties') }}</h6>
                </div>

                @livewire('properties.index')
            </div>
        </div>
    </div>

@endsection
