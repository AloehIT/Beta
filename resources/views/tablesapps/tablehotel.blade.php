<div class="col-lg-9 col-md-7 col-12 m-0">
    <div class="row">
        @if(isset($produk))
        @if($produk->count() > 0)
        @foreach($produk as $data)
        @if($data->tipe_produk == "hotel")
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
                                    class="bi bi-geo-alt"></i>{{ $data->prov }} | {{ $data->kab }}</h6>
                            <div class="mt-2">
                                <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                    {!! Str::words($data->nama_brand, 4,' ...') !!}</h4>

                                @include('admin.stars.stars')

                                <div class="row mb-3">

                                    <div class="col-12">
                                        <p class="mb-0" style="font-size: 12px;">
                                            <i class="fa-solid fa-bed"></i>
                                            {{ $data->nilai }}
                                            {{ __('label.bedsleep') }}
                                        </p>

                                        @if($data->fasilitas1 == "")
                                        <p class="mb-0" style="font-size: 12px;">
                                            <br>
                                        </p>
                                        @else
                                        <p class="mb-0" style="font-size: 12px;">
                                            <i class="bi bi-wifi"></i> {{ __('label.fa1') }} <span class="badge bg-success">{{ __('label.gratis') }}</span>
                                        </p>
                                        @endif
                                    </div>

                                </div>

                                <div style="min-height: 8em;">
                                    <p class="mb-0" style="font-size: 12px;">{{ __('label.alamat') }}</p>
                                    <p class="text-dark mb-4 keterangan"
                                        style=" font-size: 13px; text-align: left; line-height: 18px;">
                                        {!! Str::words($data->alamat, 10, ' ...') !!}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                        @currency($data->harga)
                                        <span style="font-size: 12px;">/{{$data->durasi_waktu}} {{ __('label.hari') }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-0 mt-4">
                        <a href="{{ route('detail.hotel', $data->kode_produk) }}">
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


        <div class="pagination-block mt-3">
            {{ $produk->links('paginations.paginate') }}
        </div>
    </div>
</div>