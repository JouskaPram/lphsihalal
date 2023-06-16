@extends('reg\view')

@section('title','login')




@section('detail')

        <div class="card-body py-3 mt-10">
                            <!--begin::Table container-->
                            <div class="table-responsive ">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4 max-w-50">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light text-center">
                                            <th class="ps-4 max-w-200 rounded-start ">Nomor Penyelia</th>
                                            <th class="ps-4 max-w-100 rounded-start  ">No KTP</th>
                                            <th class="ps-4 max-w-100 rounded-start  ">No Sertifikat</th>
                                            <th class="ps-4 max-w-100 rounded-start  ">Tangal Sertifikat</th>
                                            <th class="ps-4 max-w-100 rounded-start  ">No SK</th>
                                            <th class="ps-4 max-w-100 rounded-start  ">NO Kontak</th>
                              

                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                      
                                            
                                       
                                        <tr>
                                            @foreach ($penyelia as $data)
                                                
                                           
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["nama"]}}</p>          
                                            </td>
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["no_ktp"]}}</p>          
                                            </td>
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["no_sertifikat"]}}</p>          
                                            </td>
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["tgl_sertifikat"]}}</p>          
                                            </td>
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["no_sk"]}}</p>          
                                            </td>
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["no_kontak"]}}</p>          
                                            </td>
                      
                                             @endforeach
                                        </tr>

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
@endsection

