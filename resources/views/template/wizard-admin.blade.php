<div class="row mt-2">
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="detail">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="/api/reg/{{$regis["id_reg"]}}" class="p-3">
                      
                            <span class="badge badge-primary notify-badge">Detail</span>
                     
                        <img src="{{asset('assets/wizard/hasdoc.svg' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="factories">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="/api/reg/{{$regis["id_reg"]}}/factory" class="p-3"> 
                      
                            <span class="badge badge-primary notify-badge">Factory</span>
                     
                        <img src="{{asset('assets/wizard/fasility.svg' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="products">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="/api/reg/{{$regis["id_reg"]}}/product" class="p-3">
                      
                            <span class="badge badge-primary notify-badge">products</span>
                     
                        <img src="{{asset('assets/wizard/product.svg' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="perusahaan">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="/api/reg/{{$regis["id_reg"]}}/perusahaan" class="p-3">
                      
                            <span class="badge badge-primary notify-badge">Perusahaan</span>
                     
                        <img src="{{asset('assets/wizard/material.svg' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="penyelia">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="/api/reg/{{$regis["id_reg"]}}/penyelia" class="p-3">
                      
                            <span class="badge badge-primary notify-badge">Penyelia</span>
                     
                        <img src="{{asset('assets/wizard/matrix.svg' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>
        <div class="col-md-2 col-3 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="documents">
                <div class="item-wizard card shadow text-center rounded-circle">
                    <a href="/api/reg/{{$regis["id_reg"]}}/documents" class="p-3">
                      
                            <span class="badge badge-primary notify-badge">Documents</span>
                     
                        <img src="{{asset('assets/wizard/hasques.svg' )}}" class="p-5 color-primary" width="100%">
                        {{-- <span class="fas fa-folder p-5 color-primary" style="font-size: 8vw"></span> --}}
                    </a>
                </div>
            </div>

</div>