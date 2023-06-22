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
                    Edit Biaya
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form action="/api/pembayaran/update/{{$id}}/{{$singleBiaya["id_biaya"]}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 mt-3">
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Reg No.</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="id_reg" class="form-control form-control-lg form-control-solid" value="{{ $singleBiaya["id_reg"] }}" readonly>

                            </div>
                            <!--end::Col-->
                        </div>
                        
                       
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Keterangan Biaya</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <textarea type="text" name="keterangan" class="form-control form-control-lg form-control-solid" >{{ $singleBiaya["keterangan"] }}
                                </textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Harga</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="harga" class="form-control form-control-lg form-control-solid" value="{{ $singleBiaya["harga"] }}" >
            
                            </div>
                            <!--end::Col-->
                        </div>
                      
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Qty</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="qty" class="form-control form-control-lg form-control-solid" value="{{ $singleBiaya["qty"] }}" >
            
                            </div>
                            <!--end::Col-->
                        </div>
                      
                        
                    </div>
                    <button type="submit" class="btn btn-primary" value="row">Update</button>
                    <a href="/api/pembayaran/{{$id}}" class="btn btn-secondary">Back</a>
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>

@endsection

@section('custom-js')
<script>
    $('#facility_id').change(function() {
        $('#address').val($(this).find(':selected').data('address'));
    });
    $('#product_group_id').change(function() {
        var productGroup = $(this).val();
            var url = $('#api-data').attr('url-bpjph');
            $.ajax({
                url,
                data: {
                    'productGroup': productGroup,
                },
                success: (data) => {
                    console.log(data);
                    var value =
                        `<option value="" selected disabled> - Select BPJPH Product Type - </option>`;
                    data.data.forEach(function(i, k) {
                        value += `<option value="${i.id}">${i.name}</option>`;
                    });
                    $("#product_type_id").html(value);
                },
            });
    });

</script>
@endsection
