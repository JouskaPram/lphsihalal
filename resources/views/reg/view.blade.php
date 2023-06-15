@extends('layouts')
@section('title','login')

@section('content')
<div id="kt_app_content_container" class="app-container container">

    <div class="card p-10">
        <h1 class="card-title align-items-start flex-column"><span>Detail Data</span></h1>
        <div class="card-body">
            <h3>Perusahaan</h3>
            <h4 class="py-2">Nama Perusahaan: {{$regis["nama_pu"]}}</h4>
            <h4 class="py-2">Alamat Perusahaan: {{$regis["negara_pu"]}} {{$regis["prov_pu"]}}  {{$regis["kota_pu"]}} {{$regis["alamat_pu"]}}</h4>
            <h4 class="py-2">Email: {{$regis["email"]}}</h4>
            <h4 class="py-2">No Telepon: {{$regis["no_telp"]}}</h4>
            <hr>
            <h3>Penjual</h3>
            <h4 class="py-2">Nama PJ: {{$regis["nama_pj"]}}</h4>
            <h4 class="py-2">Nomor Kontak: {{$regis["no_kontak_pj"]}}</h4>
            <h4 class="py-2">Email Pj: {{$regis["email_pj"]}}</h4>
            <h4 class="py-2">Area Pemasaran: {{$regis["area_pemasaran"]}}</h4>
        </div>
    </div>
</div>
<div>
<div id="kt_app_content_container" class="app-container container py-5">
    <div class="d-flex ">
    <span class="d-flex position-relative mx-3">
    <!--begin::Label-->
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark">
        Factory
    </span>
    <!--end::Label-->

    <!--begin::Line-->
    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>
    <!--end::Line-->
</span>
<span class="d-flex position-relative mx-3">
    <!--begin::Label-->
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark">
        Product
    </span>
    <!--end::Label-->

    <!--begin::Line-->
    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>
    <!--end::Line-->
</span>
<span class="d-flex position-relative mx-3">
    <!--begin::Label-->
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark">
        Perusahaan
    </span>
    <!--end::Label-->

    <!--begin::Line-->
    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>
    <!--end::Line-->
</span>
<span class="d-flex position-relative mx-3">
    <!--begin::Label-->
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark">
        Penyelia
    </span>
    <!--end::Label-->

    <!--begin::Line-->
    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>
    <!--end::Line-->
</span>
<span class="d-flex position-relative mx-3">
    <!--begin::Label-->
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark">
        Documents
    </span>
    <!--end::Label-->

    <!--begin::Line-->
    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>
    <!--end::Line-->
</span>
</div>
</div>

<div id="kt_app_content_container" class="app-container container">
							@yield('detail')

				</div>
</div>
@endsection

