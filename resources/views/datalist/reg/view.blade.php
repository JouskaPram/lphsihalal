@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection


@section('content')
   <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid mt-20">
        <!--begin::Card-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1 me-5">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" id="search-table" class="form-control form-control-solid w-250px ps-15"
                            placeholder="Search" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="button" id="excel-table" class="btn btn-light-primary">
                        <span class="fas fa-file"></span> Export Excel
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 " id="table_init">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            
                            <th>Reg Date</th>
                            <th>Reg No.</th>
                            <th>Nama Perusahaan</th>
                            <th>Reg Status</th>
                            <th>Reg Type</th>
                            <th>Product Group</th>
                            <th>BPJPH Product Type</th>
                            <th width="20%">Action</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                        @foreach ($datalist as $item)
                            
                   
                            <tr>
                            
                                <th>{{$item["no_daftar"]}}</th>
                                <th>{{$item["tgl_daftar"]}}</th>
                                <th>{{$item["nama_pu"]}}</th>
                                <th>{{$item["nama_status_reg"]}}</th>
                                <th>{{$item["nama_jenis_usaha"]}}</th>
                                <th>{{$item["nama_jenis_daftar"]}}</th>
                                <th>{{$item["nama_jenis_produk"]}}</th>
                                
                                <th>
                                   <a href="/api/reg/{{$item["id_reg"]}}" class="btn btn-secondary h-40px fs-7 fw-bold">View</a>
                                </th>
                            </tr>
                          @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
@endsection
@section('custom-js')
    <script>
        function initDataTable() {
            let initTable = $('#table_init').DataTable({
                lengthMenu: [
                    [8, 25, 50, -1],
                    [8, 25, 50, "All"]
                ],
                dom: `
                <'row'<'col-sm-12'tr>>
                <'row'<'col-sm-6 col-md-6 'l><'col-sm-6 col-md-6 dataTables_pager'p>>`,
                buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Export Excel',
                    title: 'Halal Registrasi',
                }, ],
            });

            $('#search-table').keyup(function() {
                let value = $(this).val();
                initTable.search(value).draw();
            })
        }

        initDataTable()

        $('#excel-table').click(function() {
            $('.buttons-excel').click()
        })
    </script>
@endsection

@section('custom-css')
    <style>
        .buttons-excel {
            visibility: hidden;
        }
    </style>
@endsection