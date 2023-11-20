@extends('layouts.app')

@section('title', __('Properties'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Create Properties',
        'btn_text' => __('Back'),
        'btn_link' => route('properties.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Add New Property') }}</h6>
                </div>

                <div class="card-body">
                    @livewire('properties.form', ['property' => ''])
                </div>
            </div>
        </div>
    </div>
@endsection
