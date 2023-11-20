@extends('layouts.app')

@section('content')
    @include('partials.breadcrumbs', [
        'title' => 'View Investment Plan',
        'btn_text' => __('Back'),
        'btn_link' => route('tiers.index'),
    ])

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            {{-- Alert Messages --}}
            @include('partials.alert')

            <!--begin::Navbar-->
            <div class="card mb-6 mb-xl-9">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                        <!--begin::Image-->
                        <div
                            class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                            <img class="mw-50px mw-lg-75px" src="{{ asset('assets/media/svg/brand-logos/volicity-9.svg') }}"
                                alt="image" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Wrapper-->
                        <div class="flex-grow-1">
                            <!--begin::Head-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center mb-1">
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{ $tier->name }}</a>
                                        <span class="badge badge-light-success me-auto">In Progress</span>
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Description-->
                                    <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">#1 Tool to get started
                                        with Web Apps any Kind & size</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Head-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap justify-content-start">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">29 Jan, 2023</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Due Date</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Open Tasks</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="15000"
                                                data-kt-countup-prefix="$">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Budget Spent</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover mb-3">
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michael Eberon">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-11.jpg') }}" />
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michelle Swanston">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-7.jpg') }}" />
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Francis Mitcham">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-20.jpg') }}" />
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Perry Matthew">
                                        <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Barry Walter">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <!--end::User-->
                                    <!--begin::All users-->
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            title="View more users">+42</span>
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
                            <a class="nav-link text-active-primary py-5 me-6 active" href="#">Overview</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary py-5 me-6" href="#">Targets</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary py-5 me-6" href="#">Budget</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary py-5 me-6" href="#">Users</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary py-5 me-6" href="#">Activity</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--end::Nav-->
                </div>
            </div>
            <!--end::Navbar-->

            <!--begin::Row-->
            <div class="row gx-6 gx-xl-9">
                <!--begin::Col-->
                <div class="col-lg-6">
                    <!--begin::Summary-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">Tasks Summary</h3>
                                <div class="fs-6 fw-semibold text-gray-400">24 Overdue Tasks</div>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Chart-->
                                <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                    <div
                                        class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                        <span class="fs-2qx fw-bold">237</span>
                                        <span class="fs-6 fw-semibold text-gray-400">Total Tasks</span>
                                    </div>
                                    <canvas id="project_overview_chart"></canvas>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="text-gray-400">Active</div>
                                        <div class="ms-auto fw-bold text-gray-700">30</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="text-gray-400">Completed</div>
                                        <div class="ms-auto fw-bold text-gray-700">45</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                        <div class="bullet bg-danger me-3"></div>
                                        <div class="text-gray-400">Overdue</div>
                                        <div class="ms-auto fw-bold text-gray-700">0</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet bg-gray-300 me-3"></div>
                                        <div class="text-gray-400">Yet to start</div>
                                        <div class="ms-auto fw-bold text-gray-700">25</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Summary-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-6">
                    <!--begin::Graph-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">Tasks Over Time</h3>
                                <!--begin::Labels-->
                                <div class="fs-6 d-flex text-gray-400 fs-6 fw-semibold">
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center me-6">
                                        <span class="menu-bullet d-flex align-items-center me-2">
                                            <span class="bullet bg-success"></span>
                                        </span>Complete
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center">
                                        <span class="menu-bullet d-flex align-items-center me-2">
                                            <span class="bullet bg-primary"></span>
                                        </span>Incomplete
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card title-->

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-10 pb-0 px-5">
                            <!--begin::Chart-->
                            <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Graph-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Table-->
            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Investment Spendings</h3>
                        <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar my-1">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="kt_filter_search"
                                class="form-control form-control-solid form-select-sm w-150px ps-9"
                                placeholder="Search User" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_profile_overview_table"
                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                            <thead class="fs-7 text-gray-400 text-uppercase">
                                <tr>
                                    <th class="min-w-250px">Manager</th>
                                    <th class="min-w-150px">Date</th>
                                    <th class="min-w-90px">Amount</th>
                                    <th class="min-w-90px">Status</th>
                                    <th class="min-w-50px text-end">Details</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6">
                                <tr>
                                    <td>
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Wrapper-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma
                                                    Smith</a>
                                                <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </td>
                                    <td>Dec 20, 2023</td>
                                    <td>$752.00</td>
                                    <td>
                                        <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Wrapper-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody
                                                    Macy</a>
                                                <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </td>
                                    <td>Dec 20, 2023</td>
                                    <td>$867.00</td>
                                    <td>
                                        <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Wrapper-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="fs-6 text-gray-800 text-hover-primary">Max
                                                    Smith</a>
                                                <div class="fw-semibold text-gray-400">max@kt.com</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </td>
                                    <td>Apr 15, 2023</td>
                                    <td>$706.00</td>
                                    <td>
                                        <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Wrapper-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean
                                                    Bean</a>
                                                <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </td>
                                    <td>Jul 25, 2023</td>
                                    <td>$573.00</td>
                                    <td>
                                        <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Wrapper-->
                                            <div class="me-5 position-relative">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian
                                                    Cox</a>
                                                <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </td>
                                    <td>May 05, 2023</td>
                                    <td>$988.00</td>
                                    <td>
                                        <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">View</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/custom/apps/projects/project/project.js') }}"></script>
@endpush
