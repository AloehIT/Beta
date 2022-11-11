<div class="col-lg-9 col-md-7 col-12 m-0">
    <div class="row">
        @if(isset($produk))
        @if($produk->count() > 0)
        @foreach($produk as $data)
        @if($data->tipe_produk == "pesawat")
        <div class="col-lg-4 col-md-12 col-12 mb-3">
            <div class="card" style="border-radius: 15px;">
                <div class="card-header">
                    <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                        style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row align-items-center">
                        <div class="ms-2 c-details">
                            <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                    class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 3, ' ...') !!} |
                                Prov. {{ $data->keberangkatan }}</h6>
                            <div class="mt-2">
                                <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                    {!! Str::words($data->nama_brand, 4,' ...') !!}</h4>

                                @include('admin.stars.stars')

                                <div class="d-flex">
                                    <div>
                                        <p class="mb-0" style="font-size: 12px;">{{ __('label.berangkat') }}</p>
                                        <p style="font-size: 13px;" class="text-capitalize"><i class="fa-solid fa-plane-departure"></i>
                                            {{ $data->keberangkatan }}</p>
                                    </div>

                                    <div class="mx-3 mt-2">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                    <div>
                                        <p class="mb-0" style="font-size: 12px;">{{ __('label.tujuan') }}</p>
                                        <p style="font-size: 13px;" class="text-capitalize"><i class="fa-solid fa-plane-arrival"></i> {{
                                            $data->tujuan }}</p>
                                    </div>
                                </div>

                                <div style="min-height: 8em;">
                                    <p class="mb-0" style="font-size: 12px;">{{ __('label.keterangan') }}</p>
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
                                        @currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}}
                                            {{ __('label.jam') }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-0 mt-4">
                        <a href="{{ route('detail.pesawat', $data->kode_produk) }}">
                            <button type="button"
                                class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                Detail
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @else
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <div>
                        <img src="{{ URL::to('assets/apps.assets/icons/noproduct.png') }}" alt="">
                        <p>Belum ada product ditambahkan</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endif

    </div>
</div>