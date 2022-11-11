<div class="col-lg-9 col-md-7 col-12 m-0">
    <div class="row">
        @if(isset($produk))
            @if($produk->count() > 0)
                @foreach($produk as $data)
                <div class="col-lg-4 col-md-12 col-12 mb-3">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header">
                            <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                                style="max-height: 150px; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row align-items-center">
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                            class="bi bi-geo-alt"></i> {{ $data->prov }} | {{ $data->kab }}</h6>
                                    <div class="mt-2">
                                        <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!!
                                            Str::words($data->nama_brand, ' ...') !!}</h4>
        
                                        @include('admin.stars.stars')
        
                                        <div class="row mb-3">
        
                                            <div class="col-12 mb-0">
                                                <span class="" style="font-size: 12px;"><i class="bi bi-clock"></i> {{
                                                    $data->durasi_waktu }} {{__('label.maxsewa')}}</span>
                                            </div>
        
                                            <div class="col-12">
                                                <span class="mb-2" style="font-size: 12px;"><i class="bi bi-people-fill"></i> Max {{
                                                    $data->nilai }} {{ __('label.orang') }}</span>
                                            </div>
        
                                        </div>
        
                                        <div style="min-height: 8em;">
                                            <p class="mb-0" style="font-size: 12px;">{{ __('label.alamat') }}</p>
                                            <article class="text-dark mb-4 keterangan"
                                                style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                {!! Str::words($data->alamat, 10, ' ...') !!}
                                            </article>
                                        </div>
        
                                        <div>
                                            <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                                @currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                    {{ __('label.hari') }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="mb-0 mt-4">
                                <a href="{{ route('detail.rental', $data->kode_produk) }}">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta" class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                        Detail
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center">
                            <div>
                                <img src="{{ URL::to('assets/apps.assets/icons/noproduct.png') }}" alt="">
                                <p class="text-center">Produk tidak ditemukan</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif


    </div>
</div>