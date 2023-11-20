@extends('layouts.app')

@section('title', __('Categories'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Categories',
        'btn_text' => __('Add New'),
        'btn_link' => route('categories.create'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')
            <div class="alert alert-info alert-dismissible" role="alert">
                {{ __('The FAQs will be categorised based on these categories.') }}
            </div>

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Categories') }}</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_faqs">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">{{ __('No') }}</th>
                                    <th class="min-w-100px">{{ __('Name') }}</th>
                                    <th class="min-w-100px">{{ __('Description') }}</th>
                                    <th class="min-w-50px">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td class="">
                                            <div class="d-flex gap-3">
                                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                                    <a href="{{ route('categories.edit', $category) }}"
                                                        class="symbol-label fs-3 bg-light-success text-success"
                                                        title="{{ __('Edit Category') }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>

                                                <div class="symbol symbol-circle symbol-30px cursor-pointer"
                                                    onclick="deleteRecord('category','{{ $category->id }}')">
                                                    <span class="symbol-label fs-3 bg-light-success text-success"
                                                        title="{{ __('Delete Category') }}">
                                                        <i class="fas fa-times"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <form id="category-{{ $category->id }}"
                                                action="{{ route('categories.destroy', $category) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">{{ __('No category found') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
