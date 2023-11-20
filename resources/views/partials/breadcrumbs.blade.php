<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ $title }}</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Actions-->
        @if (isset($btn_text))
            <a href="{{ $btn_link }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                @if ($btn_text === 'Back')
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i>
                @endif
                @if ($btn_text === 'Add New')
                    <i class="fas fa-plus"></i>
                @endif
                {{ $btn_text }}

            </a>
        @endif

        @if (isset($is_model) && $is_model)
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#{{ $model_id }}">
                <i class="ki-duotone ki-plus fs-2"></i>{{ $model_btn_text }}</button>
        @endif

        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
