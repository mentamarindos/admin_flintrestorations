<!--begin::Timeline-->
<div class="card">
    <div class="card-header card-header-stretch">
        <div class="card-title d-flex align-items-center">
            <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
                <span class="path5"></span>
                <span class="path6"></span>
            </i>
            <h3 class="fw-bold m-0 text-gray-800">{{ now()->toFormattedDateString() }}</h3>
        </div>
    </div>

    <div class="card-body">
        <div class="tab-content">
            <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel"
                aria-labelledby="kt_activity_today_tab">
                <div class="timeline">
                    @foreach ($property->investments as $investor)
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>

                            <div class="timeline-content mb-10 mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">User
                                        <a href="{{ route('users.show', $investor->user) }}"
                                            class="text-primary fw-bold me-1">#{{ $investor->user->name }}</a>invested
                                        ${{ currency_format($investor->amount) }} in
                                        the property.
                                    </div>
                                    <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <div class="text-muted me-2 fs-7">Invested on
                                                {{ $investor->created_at->toFormattedDateString() }} at
                                                {{ $investor->created_at->format('h:i A') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Timeline item-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
