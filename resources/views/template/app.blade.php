<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>LPH</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
   
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--end::Global Stylesheets Bundle-->
    {{-- custom css --}}
    @yield('custom-css')
    <style>
     .pram{
        color: white;
     }   
    </style>
    {{-- end custom css --}}
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" class="app-default">
    @include('sweetalert::alert')
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header">
                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex align-items-stretch flex-stack"
                    id="kt_app_header_container">
                    <!--begin::Sidebar toggle-->
                    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2"
                            id="kt_app_sidebar_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--begin::Logo image-->
                        <a href="#">
                            <img alt="Logo" src="{{ asset('assets/media/logos/demo38-small.svg') }}"
                                class="h-30px" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
        <!--begin::Logo-->
        <a href="#" class="app-sidebar-logo">
            <img alt="Logo" src="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}"
               class="h-80px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />

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
               <div class="menu-item menu-active py-2 ">
    <span class="menu-link ">
        <span class="menu-icon">
            <i class="fa-solid fa-house fs-2 "></i>
        </span>
        <span class="menu-title"><a href="/" class="">Home</a></span>
    </span>
</div>
               <div class="menu-item menu-active py-2">
    <span class="menu-link {{ strstr(Request::url(), 'dashboard') ? 'bg-light' : '' }}">
        <span class="menu-icon">
            <i class="fa-solid fa-chart-pie fs-2 {{ strstr(Request::url(), 'dashboard') ? 'text-primary' : '' }}"></i>
        </span>
        <span class="menu-title"><a href="/api/dashboard" class="">Dashboards</a></span>
    </span>
</div>
             <div class="menu-item mb-2">
                    <div class="menu-heading text-uppercase fs-7 fw-bold">Process</div>
                    <!--begin::Separator-->
                    <div class="app-sidebar-separator separator"></div>
                    <!--end::Separator-->
                </div>

                <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'datalist') ? 'bg-light' : '' }} " >
                        <span class="menu-icon">
                            <i class="fa-solid fa-users fs-2 {{ strstr(Request::url(), 'datalist') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/datalist">Dikirim Ke LPH</a></span>
                    </span>
                </div>
                
                <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'pembayaran') ? 'bg-light' : '' }}">
                        <span class="menu-icon">
                            <i class="fas fa-credit-card fs-2 {{ strstr(Request::url(), 'pembayaran') ? 'text-primary' : '' }}" ></i>
                        </span>
                        <span class="menu-title"><a href="/api/pembayaran">Penetapan Biaya</a></span>
                    </span>
                </div>

                
                <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'proces') ? 'bg-light' : '' }}">
                        <span class="menu-icon">
                       <i class="fa-solid fa-bars-progress fs-2 {{ strstr(Request::url(), 'proces') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/proces">Proses di LPH</a></span>
                    </span>
                </div>
                <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'selesai') ? 'bg-light' : '' }}">
                        <span class="menu-icon ">
                      <i class="fa-solid fa-circle-check fs-2 {{ strstr(Request::url(), 'selesai') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/selesai">Selesai Di Proses</a></span>
                    </span>
                </div>
                  <div class="menu-item mb-2">
                    <div class="menu-heading text-uppercase fs-7 fw-bold">Admin</div>
                    <!--begin::Separator-->
                    <div class="app-sidebar-separator separator"></div>
                    <!--end::Separator-->
                </div>
                  <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'biaya') ? 'bg-light' : '' }}">
                        <span class="menu-icon">
                           <i class="fa-solid fa-sack-dollar fs-2 {{ strstr(Request::url(), 'biaya') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/biaya">Biaya</a></span>
                    </span>
                </div>
                  <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'jadwal') ? 'bg-light' : '' }}">
                        <span class="menu-icon ">
                            <i class="fa-solid fa-calendar-days fs-2 {{ strstr(Request::url(), 'jadwal') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/jadwal">Jadwal Audit</a></span>
                    </span>
                </div>
                  <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'auditior') ? 'bg-light' : '' }}">
                        <span class="menu-icon ">
                            <i class="fa-solid fa-user-pen fs-2 {{ strstr(Request::url(), 'auditior') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/auditior">Auditior</a></span>
                    </span>
                </div>
                <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'laporan') ? 'bg-light' : '' }}">
                        <span class="menu-icon">
                       <i class="fa-solid fa-clipboard fs-2 {{ strstr(Request::url(), 'laporan') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/laporan">Laporan</a></span>
                    </span>
                </div>
                <div class="menu-item  py-2">
                    <span class="menu-link {{ strstr(Request::url(), 'invoice') ? 'bg-light' : '' }}">
                        <span class="menu-icon">
                       <i class="fa-solid fa-file fs-2 {{ strstr(Request::url(), 'invoice') ? 'text-primary' : '' }}"></i>
                        </span>
                        <span class="menu-title"><a href="/api/invoice">Invoice</a></span>
                    </span>
                </div>
                 
                <!--end:Menu item-->
            </div>
            <!--end::Sidebar menu-->
        </div>
    </div>
    <!--end::Navs-->
</div>
                    <!--end::Sidebar toggle-->
                   
                    <!--begin::Toolbar wrapper-->
                    <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">{{-- search --}}
                        </div>
                        <!--begin::User menu-->
                        @include('template.user-menu')
                        <!--end::User menu-->
                    </div>
                    <!--end::Navbar-->
                    <!--begin::Separator-->
                    <div class="app-navbar-separator separator d-none d-lg-flex"></div>
                    <!--end::Separator-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <div  class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                 
                          <div  id="kt_app_content" class="app-content flex-column-fluid">
                                 @yield("content")
                          </div>
                    </div>

                </div>

           
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    @include('sweetalert::alert')

    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
   <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <script src="//www.google.com/jsapi"></script>
    {{-- custom js --}}
    <script src="{{asset('assets/js/sw.js')}}"></script>
   <script>
			function signout() {
				Swal.fire({
					title: "Apakah Anda yakin ingin keluar dari akun anda?",
					icon: "warning",
					buttonsStyling: false,
					showCancelButton: true,
					confirmButtonText: "Ya, Keluar!",
					cancelButtonText: 'Tidak, Batal!',
					customClass: {
						confirmButton: "btn btn-primary",
						cancelButton: 'btn btn-danger'
					}
				}).then((result) => {
					if (result.isConfirmed) {
						window.location="{{ route('auth.logout') }}"
					}
				});
			}
</script>
    @yield('custom-js')

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Maaf!',
                text: '{!! $message !!}',
            })
        </script>
    @endif
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{!! $message !!}',
            })
        </script>
    @endif
    {{-- end custom js --}}
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
