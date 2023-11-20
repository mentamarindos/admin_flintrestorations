@extends('layouts.app')

@section('title', __('Investment Plans'))

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'Edit Investment Plan',
        'btn_text' => __('Back'),
        'btn_link' => route('tiers.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <div class="card shadow mb-4">
                <div class="card-header card-header-height d-flex align-items-center">
                    <h6 class="font-weight-bold text-primary mb-0 pb-0">{{ __('Update Investment Plan') }}</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tiers.update', $tier) }}">
                        @csrf
                        @method('put')

                        {{-- Name --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Plan Name') }}</label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" id="name"
                                placeholder="{{ __('Investment Plan Name') }}" name="name"
                                value="{{ old('name', $tier->name) }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Starting Price --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Plan Starting Price') }}</label>
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" name="starting"
                                    class="form-control form-control-solid ps-13 @error('name') is-invalid @enderror"
                                    placeholder="{{ __('Investment Plan Starting Price') }}"
                                    value="{{ old('starting', $tier->starting) }}" required />
                            </div>
                            @error('starting')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Cashback --}}
                        <div class="form-group mb-6">
                            <label class="required fw-semibold fs-6 mb-2">{{ __('Plan Cashback') }}</label>
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="fas fa-percent fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text"
                                    class="form-control form-control-solid ps-13 @error('cashback') is-invalid @enderror"
                                    placeholder="{{ __('Investment Plan Cashback') }}" name="cashback"
                                    value="{{ old('cashback', $tier->cashback) }}" required />
                            </div>

                            @error('cashback')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Cashback --}}
                        <div class="form-group mb-6">
                            <label
                                class="required fw-semibold fs-6 mb-2">{{ __('Plan Qualified Referral Reward') }}</label>
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="fas fa-dollar-sign fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text"
                                    class="form-control form-control-solid ps-13 @error('name') is-invalid @enderror"
                                    id="referral_reward"
                                    placeholder="{{ __('Investment Plan Qualified Referral Reward') }}"
                                    name="referral_reward" value="{{ old('referral_reward', $tier->referral_reward) }}"
                                    required>
                            </div>

                            @error('referral_reward')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Plan Specifications --}}
                        @livewire('plan.specifications', ['specifications' => $tier->specifications])

                        <!--begin::Actions-->
                        <div class="text-center py-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">{{ __('Update Investment Plan') }}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
