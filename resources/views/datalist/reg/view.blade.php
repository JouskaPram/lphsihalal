@extends('template.app')
@section('content')
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Card-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header bg-primary mb-2">
                <!--begin::Card title-->
                <div class="card-title text-white">
                    Registration No. : {{$regis["id_reg"]}} 
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                {{-- wizard --}}
                @include('template.wizard-admin')
                {{-- end wizard --}}
                {{-- separator --}}
                <div class="app-sidebar-separator separator mt-3 mb-3"></div>
                {{-- end separator --}}
                {{-- form upload image --}}
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <h3 class="text-warning">Detail</h3>
                    </div>
                    <div class="col-md-12 mt-3">
                        <form action="" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="table_init">
                                    <thead width="100%">
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th>No</th>
                                            <th>Nama Perusahaan </th>
                                            <th>Alamat Perusahaan</th>
                                            <th>Email</th>
                                            <th>NO HP</th>
                                            <th>Merek Dagang</th>
                                            <th>Status Reg</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                              
                                            <tr>
                                                <th>{{$regis["no_daftar"]}}</th>
                                                <th>{{$regis["nama_pu"]}}</th>
                                                <th>{{$regis["alamat_pu"]}}</th>
                                                <th>{{$regis["email"]}}</th>
                                                <th>{{$regis["no_telp"]}}</th>
                                                <th>{{$regis["merek_dagang"]}}</th>
                                                <th>{{$regis["status_reg"]}}</th>
                                            </tr>
                                            
                                           
                                        </tbody>
                                </table>
                            </div>
                            {{-- separator --}}
                            <div class="app-sidebar-separator separator mt-3 mb-3"></div>
                            {{-- end separator --}}
                            
                        </form>
                    </div>
                </div>
                <form action="/api/reg/{{$regis["id_reg"]}}/status" method="post">
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
                {{-- end form upload image --}}
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('assets/js/has-document.js') }}"></script>
@endsection

