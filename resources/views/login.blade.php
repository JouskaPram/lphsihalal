@extends('template.auth-temp')
@section('title')
    Login - Customer
@endsection
@section('content')
@if (session("error"))
    <h1>{{session("error")}}</h1>
@endif
        
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-5 mb-lg-10"
                        src="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-5 mb-lg-10"
                        src="{{ asset('assets/media/logos/LOGO_LPH_ALUMM_VECTOR.png') }}" alt="" />
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-2">LEMBAGA PEMERIKSAAN HALAL</h1>
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center">ALMUMTAZAH</h1>
                    <div class="card p-7">
                        <p class="text-gray-800 fw-bold text-center"><i class="fa-solid fa-location-dot mx-2"></i>Jl Bayan 2 No 93 Kel. Mustikajaya Kec. Mustikajaya Kota Bekasi 17158 Jawa Barat</p>
                        <p class="text-gray-800 fw-bold text-center"><i class="fa-solid fa-envelope mx-2"></i>lphalmumtazah@gmail.com</p>
                    </div>
                    <img  src="{{ asset('assets/media/logos/alur.jpg') }}" class="" alt="" srcset="">
                    <!--end::Title-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <!--begin::Wrapper-->
            <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                <!--begin::Content-->
                <div class="w-md-400px ">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" action="{{route('login')}}" method="POST">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            <!--end::Title-->
                        </div>
                      
                        <!--begin::Heading-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <input type="email" placeholder="Email" name="userid" autocomplete="off"
                                class="form-control bg-transparent"  value="{{ old('email') }}"/>
                            <!--end::Email-->
                          
                        </div>
                        <div class="fv-row mb-3" data-kt-password-meter="true">
                            <div class="position-relative mb-3">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                      
                            <!--end::Password-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>
                            <!--begin::Link-->
                            
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Sign In</span>
                                <!--end::Indicator label-->
                            </button>
                        </div>
                        <!--end::Submit button-->
                        <!--begin::Sign up-->
                        
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Body-->
    </div>
@endsection
