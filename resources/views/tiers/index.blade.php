@extends('layouts.app')

@section('title', __('Investment Plans'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Investment Plans',
        'btn_text' => __('Add New'),
        'btn_link' => route('tiers.create'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('All Investment Plans') }}</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_tiers">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">{{ __('No') }}</th>
                                    <th class="min-w-125px">{{ __('Plan Name') }}</th>
                                    <th class="min-w-125px">{{ __('Starting Price') }}</th>
                                    <th class="min-w-125px">{{ __('Referral Reward') }}</th>
                                    <th class="min-w-125px">{{ __('Cashback') }}</th>
                                    <th class="min-w-100px">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                @forelse ($tiers as $tier)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tier->name }}</td>
                                        <td>${{ $tier->starting }}</td>
                                        <td>${{ $tier->referral_reward }}</td>
                                        <td>{{ $tier->cashback }}%</td>
                                        <td class="">
                                            <div class="d-flex gap-3">
                                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                                    <a href="{{ route('tiers.show', $tier) }}"
                                                        class="symbol-label fs-3 bg-light-success text-success"
                                                        title="{{ __('Show Plan') }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="symbol symbol-circle symbol-30px cursor-pointer">
                                                    <a href="{{ route('tiers.edit', $tier) }}"
                                                        class="symbol-label fs-3 bg-light-primary text-primary"
                                                        title="{{ __('Edit Plan') }}">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">{{ __('No plan found') }}</td>
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
