<!--begin::Navbar-->
<div class="card mb-6 mb-xl-9">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
            <div
                class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                <img class="mw-75px mw-lg-100px rounded" src="{{ asset('assets/media/svg/brand-logos/volicity-9.svg') }}"
                    alt="image" />
            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-1">
                            <span
                                class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{ $property->name }}</span>
                            <span class="badge badge-light-success me-auto">In Progress</span>
                        </div>
                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">
                            @foreach ($property->features as $feature)
                                <span>
                                    @if (!$loop->first)
                                        &nbsp;
                                    @endif
                                    {{ $feature }} &nbsp;
                                </span>
                                @if (!$loop->last)
                                    <span> | </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-start">
                    <div class="d-flex flex-wrap">
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">{{ $property->closing_date->toFormattedDateString() }}</div>
                            </div>
                            <div class="fw-semibold fs-6 text-gray-400">Due Date</div>
                        </div>

                        <div
                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-center">
                            <div class="d-flex align-items-center justify-content-center">
                                {{-- <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i> --}}
                                <div class="fs-4 fw-bold" data-kt-countup="true"
                                    data-kt-countup-value="{{ $property->investments?->unique('user_id')?->count() }}">
                                    0
                                </div>
                            </div>

                            <div class="fw-semibold fs-6 text-gray-400">Investors</div>

                        </div>

                        <div
                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-center">
                            <div class="d-flex align-items-center justify-content-center">
                                {{-- <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i> --}}
                                <div class="fs-4 fw-bold" data-kt-countup="true"
                                    data-kt-countup-value="{{ currency_format($property->investments_sum_amount) }}"
                                    data-kt-countup-prefix="$">0</div>
                            </div>
                            <div class="fw-semibold fs-6 text-gray-400">Totol Investment</div>
                        </div>
                    </div>

                    <div class="symbol-group symbol-hover mb-3">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>

                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>

                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="View more users">+42</span>
                        </a>
                        <!--end::All users-->
                    </div>
                    <!--end::Users-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
        <div class="separator"></div>
        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ request()->tab === 'overview' || !request()->tab ? 'active' : '' }}"
                    href="{{ route('properties.show', ['property' => $property, 'tab' => 'overview']) }}">Overview</a>
            </li>
            <!--end::Nav item-->

            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ request()->tab === 'investors' ? 'active' : '' }}"
                    href="{{ route('properties.show', ['property' => $property, 'tab' => 'investors']) }}">Investors</a>
            </li>
            <!--end::Nav item-->

            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ request()->tab === 'files' ? 'active' : '' }}"
                    href="{{ route('properties.show', ['property' => $property, 'tab' => 'files']) }}">Files</a>
            </li>
            <!--end::Nav item-->

            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ request()->tab === 'activity' ? 'active' : '' }}"
                    href="{{ route('properties.show', ['property' => $property, 'tab' => 'activity']) }}">Activity</a>
            </li>
            <!--end::Nav item-->

        </ul>
        <!--end::Nav-->
    </div>
</div>
<!--end::Navbar-->
