<div class="row mt-2">
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $row->name }}">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="{{ route('admin.' . \Str::slug($row->name) . '', ['id' => $data->id]) }}">
                        @if ($row->count_reject != 0)
                            <span class="badge badge-primary notify-badge"></span>
                        @endif
                        <img src="{{asset('assets/wizard/' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>

</div>