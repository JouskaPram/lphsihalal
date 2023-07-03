<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                    {{ $config['title'] ?? '' }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                    @for ($i = 0; $i < count($config['breadcrumb']); $i++)
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ $config['breadcrumb'][$i]['url'] ?? '#' }}"
                                class="text-muted text-hover-primary">{{ $config['breadcrumb'][$i]['name'] ?? '' }}</a>
                        </li>
                        @if ($i != count($config['breadcrumb']) - 1)
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                @if (!empty($config['buttons']))
                    @for ($i = 0; $i < count($config['buttons']); $i++)
                        <a href="{{ $config['buttons'][$i]['url'] ?? '' }}"
                            class="btn btn-flex {{ $config['buttons'][$i]['class-color'] ?? '' }} h-40px fs-7 fw-bold">{{ $config['buttons'][$i]['name'] ?? '' }}</a>
                    @endfor
                @endif
            </div>
        </div>
    </div>
</div>
