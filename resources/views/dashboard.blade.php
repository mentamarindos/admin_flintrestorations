@extends('layouts.app')

@section('content')
    @include('partials.breadcrumbs', ['title' => 'Dashboard'])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')
        </div>
    </div>
@endsection
