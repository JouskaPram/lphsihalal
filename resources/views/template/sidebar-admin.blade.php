<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
        <!--begin::Logo-->
        <a href="#" class="app-sidebar-logo">
            <img alt="Logo" src="{{ asset('assets/media/logos/demo38.svg') }}"
                class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
            <img alt="Logo" src="{{ asset('assets/media/logos/demo38-dark.svg') }}"
                class="h-20px h-lg-25px theme-dark-show" />
        </a>
        <!--end::Logo-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <!--begin::Svg Icon | path: icons/duotune/text/txt011.svg-->
            <span class="svg-icon svg-icon-4 rotate-180">
                <svg width="24" height="21" viewBox="0 0 24 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="14" height="3" rx="1.5" transform="matrix(-1 0 0 1 24 0)"
                        fill="currentColor" />
                    <rect width="24" height="3" rx="1.5" transform="matrix(-1 0 0 1 24 9)"
                        fill="currentColor" />
                    <rect width="18" height="3" rx="1.5" transform="matrix(-1 0 0 1 24 18)"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--begin::Navs-->
    <div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
        <div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs"
            data-kt-scroll-offset="5px">
            <!--begin::Sidebar menu-->
            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
                <!--begin::Heading-->
                <div class="menu-item mb-2">
                    <div class="menu-heading text-uppercase fs-7 fw-bold">Menu</div>
                    <!--begin::Separator-->
                    <div class="app-sidebar-separator separator"></div>
                    <!--end::Separator-->
                </div>
                <!--end::Heading-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <span class="menu-link {{$config['menu_active'] == 'dashboard' ? 'active' : ''}}">
                        <span class="menu-icon">
                            <i class="fonticon-house fs-2"></i>
                        </span>
                        <span class="menu-title"><a href="/api/dashboard">Dashboards</a></span>
                    </span>
                </div>
                <div class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fonticon-house fs-2"></i>
                        </span>
                        <span class="menu-title"><a href="/api/datalist">Perusahaan</a></span>
                    </span>
                </div>
                <div class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fonticon-house fs-2"></i>
                        </span>
                        <span class="menu-title"><a href="/api/biaya">biaya</a></span>
                    </span>
                </div>
                <!--end:Menu item-->
            </div>
            <!--end::Sidebar menu-->
        </div>
    </div>
    <!--end::Navs-->
</div>
