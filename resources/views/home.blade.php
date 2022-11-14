@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navhome')
@section('main', 'Kiano Travel')
@section('title', 'Home')
@section('home','current-menu-item')
@section('content')



<main class="content">

    {{-- START:: Slider Content --}}
    <div class="slider mt-5">
        <ul class="slides">
            @if(isset($slider))
            @if($slider->count() > 0)
            @foreach($slider as $item)
            @if($item->id == "1")
            <li data-background="{{ asset('library/slider/'. $item->img_slider) }}" class="slider active">
                <div class="container">
                    <div class="slide-caption col-lg-4 col-md-12">
                        @if(app()->getLocale()=='id')
                            @if($item->judul_slider == "")
                            <h2 class="slide-title">{{ $item->judul_slider }}</h2>
                            @else
                            <h2 class="slide-title">Judul tidak terdaftar dalam bahasa ini</h2>
                            @endif
                        @else
                            @if($item->title_slider == "")
                            <h2 class="slide-title">{{ $item->title_slider }}</h2>
                            @else
                            <h2 class="slide-title">Title not registered in this language.</h2>
                            @endif
                        @endif

                        @if(app()->getLocale()=='id')
                        @if($item->deskripsi_slider == "")
                        <article>{!! Str::words($item->deskripsi_slider, 50, ' ...') !!}</article>
                        @else
                        <article>Deskripsi slider tidak terdaftar dalam bahasa ini.</article>
                        @endif
                        @else
                        @if($item->description_slider == "")
                        <article>{!! Str::words($item->description_slider, 50, ' ...') !!}</article>
                        @else
                        <article>The slider description is not listed in this language.</article>
                        @endif
                        @endif

                    </div>
                </div>
            </li>
            @elseif($item->id == "2")
            <li data-background="{{ asset('library/slider/'. $item->img_slider) }}" class="slider">
                <div class="container">
                    <div class="slide-caption col-lg-4 col-md-12">
                        @if(app()->getLocale()=='id')
                        @if($item->judul_slider == "")
                        <h2 class="slide-title">{{ $item->judul_slider }}</h2>
                        @else
                        <h2 class="slide-title">Judul tidak terdaftar dalam bahasa ini</h2>
                        @endif
                        @else
                        @if($item->title_slider == "")
                        <h2 class="slide-title">{{ $item->title_slider }}</h2>
                        @else
                        <h2 class="slide-title">Title not registered in this language.</h2>
                        @endif
                        @endif

                        @if(app()->getLocale()=='id')
                        @if($item->deskripsi_slider == "")
                        <article>{!! Str::words($item->deskripsi_slider, 50, ' ...') !!}</article>
                        @else
                        <article>Deskripsi slider tidak terdaftar dalam bahasa ini.</article>
                        @endif
                        @else
                        @if($item->description_slider == "")
                        <article>{!! Str::words($item->description_slider, 50, ' ...') !!}</article>
                        @else
                        <article>The slider description is not listed in this language.</article>
                        @endif
                        @endif
                    </div>
                </div>
            </li>
            @elseif($item->id == "3")
            <li data-background="{{ asset('library/slider/'. $item->img_slider) }}" class="slider">
                <div class="container">
                    <div class="slide-caption col-lg-4 col-md-12">
                        @if(app()->getLocale()=='id')
                        @if($item->judul_slider == "")
                        <h2 class="slide-title">{{ $item->judul_slider }}</h2>
                        @else
                        <h2 class="slide-title">Judul tidak terdaftar dalam bahasa ini</h2>
                        @endif
                        @else
                        @if($item->title_slider == "")
                        <h2 class="slide-title">{{ $item->title_slider }}</h2>
                        @else
                        <h2 class="slide-title">Title not registered in this language.</h2>
                        @endif
                        @endif

                        @if(app()->getLocale()=='id')
                        @if($item->deskripsi_slider == "")
                        <article>{!! Str::words($item->deskripsi_slider, 50, ' ...') !!}</article>
                        @else
                        <article>Deskripsi slider tidak terdaftar dalam bahasa ini.</article>
                        @endif
                        @else
                        @if($item->description_slider == "")
                        <article>{!! Str::words($item->description_slider, 50, ' ...') !!}</article>
                        @else
                        <article>The slider description is not listed in this language.</article>
                        @endif
                        @endif
                    </div>
                </div>
            </li>
            @endif
            @endforeach
            @else
            <li data-background="{{ URL::to('library/slider/bgnotslide/bgnotfounndslider.jpg') }}"
                class="slider active">
                <div class="container">
                    <div class="slide-caption col-lg-4 col-md-12">
                        <h2 class="slide-title">{{ __('home.titlenotslide') }}</h2>
                        <p>{{ __('home.descnotslide') }}.</p>
                    </div>
                </div>
            </li>

            <li data-background="{{ URL::to('library/slider/bgnotslide/bgkontennotslider.jpg') }}" class="slider">
                <div class="container">
                    <div class="slide-caption col-lg-4 col-md-12">
                        <h2 class="slide-title">{{ __('home.titlenotslide') }}</h2>
                        <p>{{ __('home.descnotslide') }}.</p>
                    </div>
                </div>
            </li>

            <li data-background="{{ URL::to('library/slider/bgnotslide/bgnotadmininput.jpg') }}" class="slider">
                <div class="container">
                    <div class="slide-caption col-lg-4 col-md-12">
                        <h2 class="slide-title">{{ __('home.titlenotslide') }}</h2>
                        <p>{{ __('home.descnotslide') }}.</p>
                    </div>
                </div>
            </li>
            @endif
            @endif
        </ul>
        <div class="flexslider-controls">
            <div class="container">
                <ol class="flex-control-nav">
                    <li><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ol>
            </div>
        </div>
    </div>
    {{-- END:: Slider Content --}}


    <div class="fullwidth-block features-section d-none d-lg-block">
        <div class="container">
            <div class="row wow fadeInLeft justify-content-around align-items-center">

                <div class="col-lg-5 col-md-12">
                    <div class="d-flex justify-content-center" data-wow-delay=".3s">
                        <div class="">
                            <img src="{{URL::to('library/logo/kiano.png')}}" width="300" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="mt-4 col-lg-2 d-flex justify-content-around">
                    <div style="border-left: 1px solid #BFBDBD; height: 110px;"></div>
                </div>

                <div class="col-lg-5 col-md-12 pt-5 d-flex justify-content-center">
                    <div>
                        <h2 class="text-tag mb-0" style="font-size: 25px;">{{ __('home.tagline') }}</h2>
                        <p>{{ __('home.desc_tagline') }}</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="fullwidth-block features-section d-md-none d-lg-none d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-0">
                    <div class="d-flex wow fadeInLeft" data-wow-delay=".3s">
                        <div class="pt-2 mb-4">
                            <img src="{{URL::to('library/logo/kiano.png')}}" width="300" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>


                <div class="col-md-6 px-5" style="margin-top: -20px;">
                    <div class="wow fadeInLeft">
                        <h3 class="text-tag mb-0">{{ __('home.tagline') }}</h3>
                        <p>{{ __('home.desc_tagline') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- START:: Diskon Produk --}}
    <div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
        <div class="container">
            <div class="text-center">
                <p class="second-title mb-0">Kiano Tour & Travel</p>
                <h3 class="text-title">{{ __('home.populer') }}</h3>
            </div>

            <div class="row mt-5 justify-content-center">

                <div class="row mt-5 justify-content-center">
                    @if(isset($paket))
                    @if($paket->count() > 0)
                    @foreach($paket as $data)
                    <div class="col-lg-3 col-md-12 col-12 mb-3">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-header">
                                <img src="{{ asset('library/paket/'.$data->img1) }}" class="card-img-top img-fluid img"
                                    alt=""
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
                                                <h4 class="heading col-12 text-dark text-capitalize"
                                                style="font-size: 15px;">{!!
                                                Str::words($data->nama_paket, ' ...') !!}</h4>
                                            </div>

                                            <div class="row">
                                                @include('admin.stars.stars')
                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-12 mb-0">
                                                    <span class="" style="font-size: 12px;"><i
                                                            class="fa-solid fa-calendar"></i> {{
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
                                                @else
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
                                                    @currency($data->total_harga)<span
                                                        style="font-size: 12px;">/{{$data->hari}}
                                                        {{__('label.hari')}}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-0 mt-4">
                                    <a href="{{ route('detail.paket', $data->kode_paket) }}">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
                                            class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                            Detail
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
        </div>
    </div>
    {{-- END:: Diskon Produk --}}


    {{-- START:: Pelayanan --}}
    <div class="fullwidth-block features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature left-icon wow fadeInLeft" data-wow-delay=".3s">
                        <i class="icon-ticket"></i>
                        <h3 class="feature-title">{{ __('home.keunggulan1') }}</h3>
                        <p>Laborum expedita fugiat et quas quia! Odio dignissimos beatae aspernatur in vero culpa
                            excepturi consequatur!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature left-icon wow fadeInLeft">
                        <i class="icon-plane"></i>
                        <h3 class="feature-title">{{ __('home.keunggulan2') }}</h3>
                        <p>Lectetur recusandae quasi repellendus accusamus ipsa sed quibusdam officia aspernatur natus
                            itaque, asperiores impedit numquam dolorum.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature left-icon wow fadeInRight">
                        <i class="icon-jetski"></i>
                        <h3 class="feature-title">{{ __('home.keunggulan3') }}</h3>
                        <p>L culpa ex dolorum ipsa, maxime soluta repudiandae officia corrupti. Doloribus iste
                            voluptatibus nostrum?</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature left-icon wow fadeInRight" data-wow-delay=".3s">
                        <i class="icon-shuttelcock"></i>
                        <h3 class="feature-title">{{ __('home.keunggulan4') }}</h3>
                        <p>Lam sit, facere dicta libero ipsa. Repellat deleniti dignissimos, excepturi minima
                            voluptatibus mollitia adipisci iusto.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END:: Pelayanan --}}


    {{-- START:: Terpopuler --}}
    <div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
        <div class="container">
            <div class="text-center">
                <p class="second-title mb-0">Kiano Tour & Travel</p>
                <h3 class="text-title">{{ __('home.topproduct') }}</h3>
            </div>

            <div class="row mt-5 justify-content-center">
                @if(isset($terpopuler))
                    @if($terpopuler->count() > 0)
                        @foreach($terpopuler as $data)
                            @if($data->tipe_produk == "hotel")
                            <div class="col-lg-3 col-md-12 col-12 mb-3">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img"
                                            alt=""
                                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                                        class="bi bi-geo-alt"></i>{{ $data->countries }} | {{ $data->district }}</h6>
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
                                                                <i class="bi bi-wifi"></i> {{ __('label.fa1') }} <span
                                                                    class="badge bg-success">{{ __('label.gratis') }}</span>
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
                                                            <span style="font-size: 12px;">/{{$data->durasi_waktu}} {{
                                                                __('label.hari') }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <a href="{{ route('detail.hotel', $data->kode_produk) }}">
                                                <button type="button" class="btn text-white mb-0 col-12"
                                                    style="background: #1592E6;">
                                                    Detail
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @elseif($data->tipe_produk == "pesawat")
                            <div class="col-lg-3 col-md-12 col-12 mb-3">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img"
                                            alt=""
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
                                                            <p style="font-size: 13px;" class="text-capitalize"><i
                                                                    class="fa-solid fa-plane-departure"></i>
                                                                {{ $data->keberangkatan }}</p>
                                                        </div>

                                                        <div class="mx-3 mt-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>

                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">{{ __('label.tujuan') }}</p>
                                                            <p style="font-size: 13px;" class="text-capitalize"><i
                                                                    class="fa-solid fa-plane-arrival"></i> {{
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
                                                            @currency($data->harga)<span
                                                                style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                                {{ __('label.jam') }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <a href="{{ route('detail.pesawat', $data->kode_produk) }}">
                                                <button type="button" class="btn text-white mb-0 col-12"
                                                    style="background: #1592E6;">
                                                    Detail
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @elseif($data->tipe_produk == "bus")
                            <div class="col-lg-3 col-md-12 col-12 mb-3">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img"
                                            alt=""
                                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                                        class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 3, ' ...') !!} |
                                                    Kab. {{ $data->keberangkatan }}</h6>
                                                <div class="mt-2">
                                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                                        {!! Str::words($data->nama_brand, 4,' ...') !!}</h4>

                                                    @include('admin.stars.stars')

                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">{{__('label.berangkat')}}</p>
                                                            <p style="font-size: 13px;" class="text-capitalize"><i
                                                                    class="fa-solid fa-bus"></i> {{
                                                                $data->keberangkatan }}</p>
                                                        </div>

                                                        <div class="mx-3 mt-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>

                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">{{__('label.tujuan')}}</p>
                                                            <p style="font-size: 13px;" class="text-capitalize"><i
                                                                    class="fa-solid fa-bus"></i> {{
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
                                                            @currency($data->harga)<span
                                                                style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                                {{__('label.jam')}}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <a href="{{ route('detail.bus', $data->kode_produk) }}">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
                                                    class="btn text-white mb-0 col-12" style="background: #1592E6;">
                                                    Detail
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @elseif($data->tipe_produk == "kereta")
                            <div class="col-lg-3 col-md-12 col-12 mb-3">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img"
                                            alt=""
                                            style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                                        class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 3, ' ...') !!} |
                                                    Kab. {{ $data->keberangkatan }}</h6>
                                                <div class="mt-2">
                                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">
                                                        {!! Str::words($data->nama_brand, 4,' ...') !!}</h4>

                                                    @include('admin.stars.stars')

                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">{{ __('label.berangkat') }}</p>
                                                            <p class="text-capitalize" style="font-size: 13px;"><i
                                                                    class="fa-solid fa-train"></i> {{
                                                                $data->keberangkatan }}</p>
                                                        </div>

                                                        <div class="mx-3 mt-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>

                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">{{ __('label.tujuan') }}</p>
                                                            <p class="text-capitalize" style="font-size: 13px;"><i
                                                                    class="fa-solid fa-train"></i> {{
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
                                                            @currency($data->harga)<span
                                                                style="font-size: 12px;">/{{$data->durasi_waktu}}
                                                                {{ __('label.jam') }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <a href="{{ route('detail.kereta', $data->kode_produk) }}">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta"
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
                        <div class="col-lg-12 col-md-12 col-12">
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
    </div>
    {{-- END:: Terpopuler --}}



    {{-- START:: Video --}}
    <div class="fullwidth-block offers-section" data-bg-color="#ffff" style="box-shadow: 0px 0 10px #E6E6E6;">
        <div class="container">
            <div class="text-center">
                <p class="second-title mb-0">Kiano Travel</p>
                <h3 class="text-title">{{ __('home.labelvideo') }}</h3>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <h2 class="text-title text-center">{{ __('home.tentangkami') }}</h2>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/7Gy11LgmuUA?&autoplay=1" title="YouTube video" allowfullscreen></iframe>
                    </div>    
                </div>
                <div class="col-md-6">
                    <h2 class="text-title text-center">{{ __('home.tutorial') }}</h2>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/7Gy11LgmuUA?&autoplay=1" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END:: Video --}}




    {{-- STAR:: Patner Brand --}}
    <div class="content1" class="fullwidth-block offers-section" data-bg-color="#fff">

        <div class="site-section bg-left-half">
            <div class="container owl-2-style">

                <div class="">
                    <p class="second-title mb-0">Kiano Travel</p>
                    @if(app()->getLocale()=='id')
                    <h3 class="text-title">Merek Kemitraan</h3>
                    @else
                    <h3 class="text-title">Brand Partnership</h3>
                    @endif
                </div>


                <div class="owl-carousel owl-2">

                    @forelse($patner as $data)
                    <div class="media-2910">
                        <a href="{{ $data->links }}" target="_blank"><img
                                src="{{ asset('library/patner/'.$data->img_patner) }}" alt="Image"
                                class="img-fluid m-auto"></a>
                    </div>
                    @empty
                    <div class="media-29101">
                        <a target="_blank"><img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}"
                                alt="Image" class="img-fluid" width="300" height="300"></a>
                    </div>
                    @endforelse

                </div>


            </div>
        </div>

    </div>
    {{-- END:: Patner Brand --}}
</main>
@endsection