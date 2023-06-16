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
                                            <th class="ps-4 max-w-50 rounded-start text-center">Nama Produk</th>
                              

                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($product as $data)
                                            
                                       
                                        <tr>
                                            <td class="text-center">
                                                <p class="text-dark fw-bold text-hover-primary d-block mb-1 fs-4 mx-4 ">{{$data["reg_prod_name"]}}</p>          
                                            </td>
                      

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
