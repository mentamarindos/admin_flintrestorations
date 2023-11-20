<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack pb-7">
    <!--begin::Title-->
    <div class="d-flex flex-wrap align-items-center my-1">
        <h3 class="fw-bold me-5 my-1">Investors ({{ $property->investments?->unique('user_id')?->count() }})</h3>
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="text" id="kt_filter_search"
                class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
        </div>
        <!--end::Search-->
    </div>
    <!--end::Title-->

</div>
<!--end::Toolbar-->
<!--begin::Tab Content-->
<div class="tab-content">
    <!--begin::Tab pane-->
    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
        <!--begin::Row-->
        <div class="row g-6 g-xl-9">
            <!--begin::Col-->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                        <div class="symbol symbol-65px symbol-circle mb-5">
                            <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                        </div>
                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                        <div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>

                        <div class="d-flex flex-center flex-wrap">
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                <div class="fw-semibold text-gray-400">Earnings</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">23</div>
                                <div class="fw-semibold text-gray-400">Tasks</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                <div class="fw-semibold text-gray-400">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                        <div class="symbol symbol-65px symbol-circle mb-5">
                            <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                        </div>
                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                        <div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>

                        <div class="d-flex flex-center flex-wrap">
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                <div class="fw-semibold text-gray-400">Earnings</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">23</div>
                                <div class="fw-semibold text-gray-400">Tasks</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                <div class="fw-semibold text-gray-400">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                        <div class="symbol symbol-65px symbol-circle mb-5">
                            <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                        </div>
                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                        <div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>

                        <div class="d-flex flex-center flex-wrap">
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                <div class="fw-semibold text-gray-400">Earnings</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">23</div>
                                <div class="fw-semibold text-gray-400">Tasks</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                <div class="fw-semibold text-gray-400">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                        <div class="symbol symbol-65px symbol-circle mb-5">
                            <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                        </div>
                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                        <div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>

                        <div class="d-flex flex-center flex-wrap">
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                <div class="fw-semibold text-gray-400">Earnings</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">23</div>
                                <div class="fw-semibold text-gray-400">Tasks</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                <div class="fw-semibold text-gray-400">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

    </div>
    <!--end::Tab pane-->

</div>
<!--end::Tab Content-->
