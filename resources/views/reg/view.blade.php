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
<div id="kt_app_content_container" class="app-container container py-5 d-flex justify-content-between">
  <div class="d-flex flex-column align-items-center">
    <a href="/api/reg/{{$regis["id_reg"]}}/factory" class="d-inline-block mb-2 fs-2x fw-bold text-dark p-3 bg-primary rounded">
      Factory
    </a>
  
  </div>
  
  <div class="d-flex flex-column align-items-center">
    <a href="/api/reg/{{$regis["id_reg"]}}/product" class="d-inline-block mb-2 fs-2x fw-bold text-dark p-3 bg-primary rounded">
      Product
    </a>
  
  </div>
  
  <div class="d-flex flex-column align-items-center">
    <a href="/api/reg/{{$regis["id_reg"]}}/perusahaan" class="d-inline-block mb-2 fs-2x fw-bold text-dark p-3 bg-primary rounded">
      Perusahaan
    </a>
  
  </div>
  
  <div class="d-flex flex-column align-items-center">
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark p-3 bg-primary rounded">
      Penyelia
    </span>
  
  </div>
  
  <div class="d-flex flex-column align-items-center">
    <span class="d-inline-block mb-2 fs-2x fw-bold text-dark p-3 bg-primary rounded">
      Documents
    </span>
  
  </div>
</div>


<div id="kt_app_content_container" class="app-container container">
							@yield('detail')

				</div>
</div>
@endsection

