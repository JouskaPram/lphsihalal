<!--begin::Action--->
<td class="">
    <div class="d-flex">
        @can('update '.$can)
        <a href="{{ route($route.'.edit',$model->id) }}" class="btn btn-sm btn-light-info me-1">Edit</a>
        @endcan
        @can('delete '.$can)
        <button data-destroy="{{ route($route.'.destroy', $model->id) }}" class="btn btn-sm btn-light-danger">
            Delete
        </button>
        @endcan
        {{-- @if ($can == 'opname')
            <a href="{{ route($route.'.show',$model->id) }}" class="btn btn-sm btn-light-info me-1">Detail</a>
        @endif --}}
    </div>
</td>
<!--end::Action--->
