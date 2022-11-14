<div class="row mt-5">
    <div class="mb-3" style="font-weight: 500;">
        <h5>Produk Populer</h5>
    </div>


    <div class="col-lg-3 col-md-12 d-lg-none">
        <div class="card mb-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">                    
            <div class="card-body pt-3 pb-0 mb-0 ">
                <p style="color: #898989; font-weight: 500;" class="px-4 pb-0 mb-2">Login Saat Ini</p>
                <div class="d-flex pb-4 px-4">

                    @if(auth()->user()->foto == "")
                    <img src="{{URL::to('assets/admin.assets/background/bgdashboard.png')}}" width="40" height="40" class="rounded-circle" style="border: 1px solid #898989;">
                    @else 
                    <img src="{{ asset('library/profile/'. auth()->user()->foto) }}" width="40" height="40" class="rounded-circle" style="border: 1px solid #898989;">
                    @endif
                    

                    <div class="px-2" style="line-height: 2px;">
                        <p class="mb-0">{{ auth()->user()->username }}</p>
                        <a href="#" style="font-size: 12px;">{{ auth()->user()->role }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">                    
            <div class="card-body p-4">
                <div class="pt-3 text-center">
                    <h4>Kategori</h4>
                </div>

                <div class="pt-2 d-flex justify-content-center">
                    <div class="text-center">
                        <a href="{{ route('admin.pakettour') }}" class="btn col-8" style="color: #898989; font-weight: 600;">Paket Tour</a>
                        <a href="{{ route('admin.produktour') }}" class="btn col-8" style="color: #898989; font-weight: 600;">Produk Tour</a>
                        <a href="{{ route('admin.sewamobil') }}" class="btn col-8" style="color: #898989; font-weight: 600;">Tiket</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    

    <div class="col-lg-9 col-md-12 mb-3">
        <div class="row">
            @if(isset($terbaik))
            @if($terbaik->count() > 0)
            @foreach($terbaik as $data)
            @if($data->tipe_produk == "hotel")
            <div class="col-lg-4 my-3 mb-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                        class="bi bi-geo-alt"></i> {{ $data->countries }} | {{ $data->district }}</h6>
                                <div class="mt-2">
                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                        {!! Str::words($data->nama_brand, ' ...') !!}</h4>

                                    @include('admin.stars.stars')

                                    <div class="row mb-3">

                                        <div class="col-12">
                                            <p class="mb-0" style="font-size: 12px;">
                                                <i class="fa-solid fa-bed"></i>
                                                {{ $data->nilai }}
                                                Tempat tidur
                                            </p>

                                            @if($data->fasilitas1 == "")
                                            <p class="mb-0" style="font-size: 12px;">
                                                <br>
                                            </p>
                                            @else
                                            <p class="mb-0" style="font-size: 12px;">
                                                <i class="bi bi-wifi"></i> Free Wifi
                                            </p>
                                            @endif
                                        </div>

                                    </div>

                                    <div style="min-height: 8em;">
                                        <p class="mb-0" style="font-size: 12px;">Alamat</p>
                                        <article class="text-dark mb-4 keterangan"
                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                            {!! Str::words($data->alamat, 10,' ...') !!}
                                        </article>
                                    </div>

                                    <div>
                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                            @currency($data->harga)
                                            <span style="font-size: 12px;">/{{$data->durasi_waktu}} hari</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 mt-4">
                            <a href="{{ route('admin.produktour') }}">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
                                    class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                    Lihat Produk
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($data->tipe_produk == "pesawat")
            <div class="col-lg-4 my-3 mb-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                        class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 4, ' ...') !!} |
                                    Prov. {{ $data->keberangkatan }}</h6>
                                <div class="mt-2">
                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                        {!! Str::words($data->nama_brand, ' ...') !!}</h4>

                                    @include('admin.stars.stars')

                                    <div class="d-flex">
                                        <div>
                                            <p class="mb-0" style="font-size: 12px;">Keberangkatan</p>
                                            <p style="font-size: 13px;"><i class="fa-solid fa-plane-departure"></i>
                                                {{ $data->keberangkatan }}</p>
                                        </div>

                                        <div class="mx-3 mt-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>

                                        <div>
                                            <p class="mb-0" style="font-size: 12px;">Tujuan</p>
                                            <p style="font-size: 13px;"><i class="fa-solid fa-plane-arrival"></i> {{
                                                $data->tujuan }}</p>
                                        </div>
                                    </div>

                                    <div style="min-height: 8em;">
                                        <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                        <article class="text-dark mb-4 keterangan"
                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                        </article>
                                    </div>

                                    <div>
                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                            @currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                hari</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 mt-4">
                            <a href="{{ route('admin.produktour') }}">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
                                    class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                    Lihat Produk
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($data->tipe_produk == "bus")
            <div class="col-lg-4 my-3 mb-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                        class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 4, ' ...') !!} |
                                    Kab. {{ $data->keberangkatan }}</h6>
                                <div class="mt-2">
                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                        {!! Str::words($data->nama_brand, ' ...') !!}</h4>

                                    @include('admin.stars.stars')

                                    <div class="d-flex">
                                        <div>
                                            <p class="mb-0" style="font-size: 12px;">Keberangkatan</p>
                                            <p style="font-size: 13px;"><i class="fa-solid fa-bus"></i> {{
                                                $data->keberangkatan }}</p>
                                        </div>

                                        <div class="mx-3 mt-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>

                                        <div>
                                            <p class="mb-0" style="font-size: 12px;">Tujuan</p>
                                            <p style="font-size: 13px;"><i class="fa-solid fa-bus"></i> {{
                                                $data->tujuan }}</p>
                                        </div>
                                    </div>

                                    <div style="min-height: 8em;">
                                        <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                        <article class="text-dark mb-4 keterangan"
                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                        </article>
                                    </div>

                                    <div>
                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                            @currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                hari</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 mt-4">
                            <a href="{{ route('admin.produktour') }}">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
                                    class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                    Lihat Produk
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($data->tipe_produk == "kereta")
            <div class="col-lg-4 my-3 mb-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                        class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 4,' ...') !!}  |
                                    Kab. {{ $data->keberangkatan }}</h6>
                                <div class="mt-2">
                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                        {!! Str::words($data->nama_brand, 4, ' ...') !!}</h4>

                                    @include('admin.stars.stars')

                                    <div class="d-flex">
                                        <div>
                                            <p class="mb-0" style="font-size: 12px;">Keberangkatan</p>
                                            <p style="font-size: 13px;"><i class="fa-solid fa-train"></i> {{
                                                $data->keberangkatan }}</p>
                                        </div>

                                        <div class="mx-3 mt-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>

                                        <div>
                                            <p class="mb-0" style="font-size: 12px;">Tujuan</p>
                                            <p style="font-size: 13px;"><i class="fa-solid fa-train"></i> {{
                                                $data->tujuan }}</p>
                                        </div>
                                    </div>

                                    <div style="min-height: 8em;">
                                        <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                        <article class="text-dark mb-4 keterangan"
                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                        </article>
                                    </div>

                                    <div>
                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                            @currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                hari</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 mt-4">
                            <a href="{{ route('admin.produktour') }}">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
                                    class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                    Lihat Produk
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <div class="col-lg-12 col-md-9">
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


    <div class="col-lg-3 col-md-12 d-none d-lg-block">
        <div class="card mb-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">                    
            <div class="card-body pt-3 pb-0 mb-0 ">
                <p style="color: #898989; font-weight: 500;" class="px-4 pb-0 mb-2">Login Saat Ini</p>
                <div class="d-flex pb-4 px-4">

                    @if(auth()->user()->foto == "")
                    <img src="{{URL::to('assets/admin.assets/background/bgdashboard.png')}}" width="40" height="40" class="rounded-circle" style="border: 1px solid #898989;">
                    @else 
                    <img src="{{ asset('library/profile/'. auth()->user()->foto) }}" width="40" height="40" class="rounded-circle" style="border: 1px solid #898989;">
                    @endif
                    

                    <div class="px-2" style="line-height: 2px;">
                        <p class="mb-0">{{ auth()->user()->username }}</p>
                        <a href="#" style="font-size: 12px;">{{ auth()->user()->role }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">                    
            <div class="card-body p-4">
                <div class="pt-3 text-center">
                    <h4>Kategori</h4>
                </div>

                <div class="pt-2 d-flex justify-content-center">
                    <div class="text-center">
                        <a href="{{ route('admin.pakettour') }}" class="btn col-8" style="color: #898989; font-weight: 600;">Paket Tour</a>
                        <a href="{{ route('admin.produktour') }}" class="btn col-8" style="color: #898989; font-weight: 600;">Produk Tour</a>
                        <a href="{{ route('admin.sewamobil') }}" class="btn col-8" style="color: #898989; font-weight: 600;">Tiket</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
   
</div>
