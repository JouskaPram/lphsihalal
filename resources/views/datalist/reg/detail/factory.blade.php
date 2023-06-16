@extends('reg\view')

@section('title','login')




@section('detail')
        <div class="card-body py-3 mt-10">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 min-w-275px rounded-start">Nama Perusahaan</th>
                                            <th class="min-w-200px">Alamat</th>
                                            <th class="min-w-125px">Status Milik</th>

                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($factory as $data)
                                            
                                       
                                        <tr>
                                            <td>
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["nama"]}}</p>          
                                            </td>
                                            <td>
                                                <p class="text-dark fw-semibold text-hover-primary d-block mb-1 fs-6">{{$data["negara"]}} {{$data["provinsi"]}} {{$data["kab_kota"]}} {{$data["alamat"]}} kode pos:{{$data["kode_pos"]}}</p>
                                            </td>
                                            <td>
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$data["status_milik"]}}</p>

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
@endsection

