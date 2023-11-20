<div class="">
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack pb-7">
        <!--begin::Title-->
        <div class="d-flex flex-wrap align-items-center my-1">
            <h3 class="fw-bold me-5 my-1">Investors ({{ $property->investments->count() }})</h3>
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" id="kt_filter_search" wire:model.live="search"
                    class="form-control form-control-sm border-body bg-body w-250px ps-10" placeholder="Search" />
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
                @forelse ($investors as $investor)
                    <!--begin::Col-->
                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                <div class="symbol symbol-65px symbol-circle mb-5">
                                    <span
                                        class="symbol-label fs-2x fw-semibold text-success bg-light-success">{{ name_alphabetic($investor->user?->name) }}</span>
                                </div>
                                <a href="{{ route('users.show', $investor->user) }}"
                                    class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">{{ $investor->user?->name }}</a>
                                <div class="fw-semibold text-gray-400 mb-6">{{ $investor->user?->email }}</div>

                                <div class="d-flex flex-center flex-wrap">
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                        <div class="fs-6 fw-bold text-gray-700">
                                            ${{ currency_format($investor->amount) }}</div>
                                        <div class="fw-semibold text-gray-400">Investment</div>
                                    </div>
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                        <div class="fs-6 fw-bold text-gray-700">
                                            ${{ currency_format($investor->monthly_rent) }}</div>
                                        <div class="fw-semibold text-gray-400">Monthly Rent</div>
                                    </div>
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                        <div class="fs-6 fw-bold text-gray-700">
                                            ${{ currency_format($investor->appreciation) }}</div>
                                        <div class="fw-semibold text-gray-400">Appreciation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>No investor found</h4>
                            </div>
                        </div>
                    </div>
                @endforelse

                {!! $investors->links() !!}
            </div>
            <!--end::Row-->

        </div>
        <!--end::Tab pane-->

    </div>
    <!--end::Tab Content-->
</div>
