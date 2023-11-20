<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ asset('images/logo-light.png') }}" class="h-30px app-sidebar-logo-default" />
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="hover-scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">
                    <!--Dashboard-->
                    <div class="menu-item">
                        <a class="menu-link {{ request()->is('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            <span class="menu-icon">
                                <i class="fas fa-fw fa-tachometer-alt">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">{{ __('Dashboard') }}</span>
                        </a>
                    </div>

                    <!--Property Management-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <span class="menu-title">{{ __('Property Management') }}</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>

                        {{-- Proprties --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('properties*') ? 'active' : '' }}"
                                href="{{ route('properties.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-home">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Properties') }}</span>
                            </a>
                        </div>

                        <!--Investment Plans / Tiers-->
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('tiers*') ? 'active' : '' }}"
                                href="{{ route('tiers.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-warehouse">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Investment Plans') }}</span>
                            </a>
                        </div>

                        <!--Countries-->
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('countries*') ? 'active' : '' }}"
                                href="{{ route('countries.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-globe">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Countries') }}</span>
                            </a>
                        </div>

                        <!--Amenities-->
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('amenities*') ? 'active' : '' }}"
                                href="{{ route('amenities.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-stroopwafel">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Amenities') }}</span>
                            </a>
                        </div>

                        {{-- Proprty Categories --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('property/categories*') ? 'active' : '' }}"
                                href="{{ route('properties.categories.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-pager">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Categories') }}</span>
                            </a>
                        </div>

                    </div>


                    <!--User Management-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <span class="menu-title">{{ __('User Management') }}</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('users*') ? 'active' : '' }}"
                                href="{{ route('users.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-users">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Users') }}</span>
                            </a>
                        </div>

                        <!--KYC-->
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('kyc*') ? 'active' : '' }}"
                                href="{{ route('kyc.index') }}">
                                <span class="menu-icon">
                                    <i class="far fa-fw fa-id-card">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('KYC') }}</span>
                            </a>
                        </div>
                    </div>

                    {{-- Website Area --}}
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <span class="menu-title">{{ __('Sell With Us') }}</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>

                        {{-- Locations --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('locations*') ? 'active' : '' }}"
                                href="{{ route('locations.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-map-marker">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Locations') }}</span>
                            </a>
                        </div>
                        {{-- Selling Requests --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('sellings*') ? 'active' : '' }}"
                                href="{{ route('sellings.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-spell-check">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Selling Requests') }}</span>
                            </a>
                        </div>

                    </div>

                    {{-- Website Area --}}
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <span class="menu-title">{{ __('Website') }}</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>

                        {{-- Categories --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('categories*') ? 'active' : '' }}"
                                href="{{ route('categories.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-pager">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Categories') }}</span>
                            </a>
                        </div>

                        {{-- FAQ --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('faqs*') ? 'active' : '' }}"
                                href="{{ route('faqs.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-question">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('FAQs') }}</span>
                            </a>
                        </div>

                        {{-- Testimonials --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('testimonials*') ? 'active' : '' }}"
                                href="{{ route('testimonials.index') }}">
                                <span class="menu-icon">
                                    <i class="far fa-fw fa-comment-alt">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Testimonials') }}</span>
                            </a>
                        </div>

                        {{-- Glossary --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('glossaries*') ? 'active' : '' }}"
                                href="{{ route('glossaries.index') }}">
                                <span class="menu-icon">
                                    <i class="far fa-fw fa-bookmark">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Glossary') }}</span>
                            </a>
                        </div>

                        {{-- User Messages --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('messages*') ? 'active' : '' }}"
                                href="{{ route('messages.index') }}">
                                <span class="menu-icon">
                                    <i class="far fa-fw fa-envelope">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Messages') }}</span>
                            </a>
                        </div>
                    </div>

                    <!--Profile-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <span class="menu-title">{{ __('Admin Area') }}</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>

                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('profile*') ? 'active' : '' }}"
                                href="{{ route('profile.index') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-user">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">{{ __('Profile') }}</span>
                            </a>
                        </div>

                        <!--Sign Out-->
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="menu-icon">
                                    <i class="fas fa-fw fa-sign-out-alt">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Sign Out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->

</div>
