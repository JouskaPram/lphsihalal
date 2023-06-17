@extends('template.app' )
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
                        <h3 class="text-warning mt-4">Penyelia</h3>
                    </div>
                    <div class="col-md-12 mt-3">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="table_init">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    {{-- <th>No</th> --}}
                                    <th>Nama</th>
                                    <th>No KTP</th>
                                    <th>Tanggal Sertifikat</th>
                                    <th>No Sk</th>
                                    <th>no_kontak</th>
                                 
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($penyelia as $index => $item)
                                    
                                <tr>
                                    {{-- <td>{{$index+1}}</td> --}}
                                    <td>{{$item["nama"]}}</td>
                                    <td>{{$item["no_ktp"]}}</td>
                                    <td>{{$item["tgl_sertifikat"]}}</td>
                                    <td>{{$item["no_sk"]}}</td>
                                    <td>{{$item["no_kontak"]}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                {{-- end form upload image --}}
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
@endsection
@section('custom-js')
    <script src="{{asset('assets/js/custom-customer.js')}}"></script>
@endsection
