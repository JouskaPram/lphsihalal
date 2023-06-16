
    
@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection
@section('content')



<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-fluid pt-20">
    <!--begin::Card-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="javascript:;" class="card bg-danger hoverable card-xl-stretch bgi-no-repeat" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/media/svg/shapes/abstract-2.svg') }});border-radius:8px;" >
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                    <i class="las la-user-friends fs-3x text-secondary"></i>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">2</div>
                    <div class="fw-semibold text-white">Active Registration</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="javascript:;" class="card bg-primary hoverable card-xl-stretch bgi-no-repeat" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/media/svg/shapes/abstract-2.svg') }});border-radius:8px;">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                    <i class="las la-box fs-3x text-secondary"></i>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">3</div>
                    <div class="fw-semibold text-white">Fatwa Registration</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="javascript:;" class="card bg-success hoverable card-xl-stretch mb-5 bgi-no-repeat" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/media/svg/shapes/abstract-2.svg') }});border-radius:8px;">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                    <i class="las la-cash-register fs-3x text-secondary"></i>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">5</div>
                    <div class="fw-semibold text-white">Complete Registration</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="javascript:;" class="card bg-info hoverable card-xl-stretch mb-5 bgi-no-repeat" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/media/svg/shapes/abstract-2.svg') }});border-radius:8px;">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                    <i class="las la-clipboard-list fs-3x text-secondary"></i>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">p</div>
                    <div class="fw-semibold text-white">Total Registration</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-5 mb-xl-10">
            <!--begin::Chart widget 4-->
            <div class="card card-flush overflow-hidden h-md-100">
                <!--begin::Header-->
                <div class="card-header py-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">New Registration</span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                    <!--begin::Chart-->
                    <div id="newreg" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 4-->
        </div>
        <div class="col-xl-4 mb-5 mb-xl-10">
            <!--begin::Chart widget 4-->
            <div class="card card-flush overflow-hidden h-md-100">
                <!--begin::Header-->
                <div class="card-header py-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Development</span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                    <!--begin::Chart-->
                    <div id="development" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 4-->
        </div>
        <div class="col-xl-4 mb-5 mb-xl-10">
            <!--begin::Chart widget 4-->
            <div class="card card-flush overflow-hidden h-md-100">
                <!--begin::Header-->
                <div class="card-header py-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Renewal</span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                    <!--begin::Chart-->
                    <div id="renewal" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 4-->
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</script>
<script>
    $(function () {
        var newreg = Morris.Bar({
            element: 'newreg',
            data: [
            {label: 'Min Day', value: 0},
            {label: 'Avg Day', value: 0},
            {label: 'Max Day', value: 0}
            ],	
            xkey: 'label',
            ykeys: ['value'],
            labels: ['Value'],
            barRatio: 0.4,
            xLabelAngle: 35,
            hideHover: 'auto',
            //barColors: ['#6883a3'],
            barColors: function (row, series, type) {
                //console.log("--> "+row.label, series, type);
                if(row.label == "Min Day") return "#34af2b";
                else if(row.label == "Avg Day") return "#fec04c";
                else if(row.label == "Max Day") return "#AD1D28";
            }
        });
        var development = Morris.Bar({
            element: 'development',
            data: [
            {label: 'Min Day', value: 0},
            {label: 'Avg Day', value: 0},
            {label: 'Max Day', value: 0}
            ],	
            xkey: 'label',
            ykeys: ['value'],
            labels: ['Value'],
            barRatio: 0.4,
            xLabelAngle: 35,
            hideHover: 'auto',
            //barColors: ['#6883a3'],
            barColors: function (row, series, type) {
                //console.log("--> "+row.label, series, type);
                if(row.label == "Min Day") return "#34af2b";
                else if(row.label == "Avg Day") return "#fec04c";
                else if(row.label == "Max Day") return "#AD1D28";
            }
        });
        var renewal = Morris.Bar({
            element: 'renewal',
            data: [
            {label: 'Min Day', value: 0},
            {label: 'Avg Day', value: 0},
            {label: 'Max Day', value: 0}
            ],	
            xkey: 'label',
            ykeys: ['value'],
            labels: ['Value'],
            barRatio: 0.4,
            xLabelAngle: 35,
            hideHover: 'auto',
            //barColors: ['#6883a3'],
            barColors: function (row, series, type) {
                //console.log("--> "+row.label, series, type);
                if(row.label == "Min Day") return "#34af2b";
                else if(row.label == "Avg Day") return "#fec04c";
                else if(row.label == "Max Day") return "#AD1D28";
            }
        });
    });
</script>
@endsection
