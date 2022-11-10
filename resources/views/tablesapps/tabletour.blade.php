<div class="col-md-9">
    <div class="row">
        @if(isset($produk))
            @if($produk->count() > 0)
                @foreach($produk as $data)
                    <div class="col-lg-4 col-md-12 col-12 mb-3">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-header">
                                <img src="{{ asset('library/paket/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                                    style="max-height: 150px; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="ms-2 c-details">
                                        <div class="row">
                                            <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                                class="bi bi-geo-alt"></i>Tour {{ $data->wilayah }} | {{ $data->destinasi }}</h6>
                                        </div>
                                        <div class="mt-2">
                                            <div class="row">
                                                <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!!
                                                    Str::words($data->nama_paket, ' ...') !!}</h4>
                                            </div>
            
                                            <div class="row">
                                                @include('admin.stars.stars')
                                            </div>
            
                                            <div class="row mb-3">
            
                                                <div class="col-12 mb-0">
                                                    <span class="" style="font-size: 12px;"><i class="fa-solid fa-calendar"></i> {{
                                                        $data->hari }} {{ __('label.hari') }}</span>
                                                </div>
            
                                            </div>
            
                                            <div style="min-height: 8em;">
                                                <p class="mb-0" style="font-size: 12px;">{{ __('label.labeldesc') }}</p>
                                                @if(app()->getLocale()=='id')
                                                    @if($data->keterangan == "")
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            Tidak ada keterangan yang diberikan pada bahasa ini
                                                        </article>
                                                    @else
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                                        </article>
                                                    @endif
                                                @elseif(app()->getLocale()=='en')
                                                    @if($data->description == "")
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            No description given in this language
                                                        </article>
                                                    @else
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            {!! Str::words($data->description, 10,' ...') !!}
                                                        </article>
                                                    @endif
                                                @endif
                                            </div>
            
                                            <div>
                                                <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                                    @currency($data->total_harga)<span style="font-size: 12px;">/{{$data->hari}}
                                                        hari</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="mb-0 mt-4">
                                    <a href="{{ route('detail.paket', $data->kode_paket) }}">
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