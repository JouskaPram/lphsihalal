<!--begin::Table-->
{{ $dataTable->table() }}
<!--end::Table-->
{{-- Inject Scripts --}}
@section('custom-js')
    {{ $dataTable->scripts() }}
@endsection
