@extends("layouts")
@section('title','login')

@section('content')
<div id="kt_app_content_container" class="app-container container">

    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">DataList</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Total Data : {{$total}}</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-category fs-6"></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 min-w-275px rounded-start">Nama Pu</th>
                                            <th class="min-w-200px">Nama Alt</th>
                                            <th class="min-w-125px">Jenis Produk</th>
                                            <th class="min-w-150px">Status</th>
                                            <th class="min-w-150px">Jumlah Produk</th>
                                            <th class="min-w-150px">Jenis Usaha</th>
                                            <th class="min-w-150px  rounded-end">Detail</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($datalist as $data)
                                            
                                       
                                        <tr>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["nama_pu"]}}</a>          
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-semibold text-hover-primary d-block mb-1 fs-6">{{$data["nama_pu_alt"]}}</a>
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$data["nama_jenis_daftar"]}}</a>

                                            </td>
                                            <td>
                                                 <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$data["nama_status_reg"]}}</a>
                                            </td>
                                            <td>
                                                 <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$data["jml_produk"]}}</a>
                                            </td>
                                            <td>
                                                 <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$data["nama_jenis_usaha"]}}</a>
                                            </td>
                                            <td>
                                                <a href="/api/reg/{{$data["id_reg"]}}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">Lihat detail</a>
                                            </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
</div>
</div>

<script>var hostUrl = "/";</script>
	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>

		 <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
		 <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
@endsection