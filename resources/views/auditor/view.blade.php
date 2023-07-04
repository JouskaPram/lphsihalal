@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection


@section('content')
   <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid mt-20">
        <!--begin::Card-->
        @if(session("updated"))       
          <h3 class="text-primary py-3 ">{{session("updated")}}</h3>
        @endif
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
                    <a href="/api/auditior/post" class="btn btn-light-primary">
                        <i class="fa-solid fa-user-plus"></i> Tambah Auditor
                    </a>
                    <!--end::Button-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="table-responsive">

                    <table class="table table-hover table-rounded table-striped border gy-7 gs-7 " id="table_init">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                
                                <th>Reg Id</th>
                                <th>Create By</th>
                                <th>Create On</th>
                           
                           
                                <th width="20%">Action</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-semibold text-gray-600">
                            @foreach ($filterauditior as $item)
                                
                       
                                <tr>
                                
                                    <th class="text-primary"><a href="/api/reg/{{$item["id_reg"]}}">{{$item["id_reg"]}}</a></th>
                                    <th>{{$item["create_by"]}}</th>
                                    <th>{{$item["create_on"]}}</th>                            
                                    <th>
                                        <form action="/api/auditor/delete/{{$item["id_reg"]}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        
                                        <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </th>
                                </tr>
                              @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <!--begin::Table-->
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