@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Paket Tour')
@section('subt', 'Detail')
@section('content')
<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/imagedetail.css') }}">



<main class="content">
    <div>
        <div class="d-none d-lg-block d-md-none mt-3">
            <div class="fullwidth-block"></div>
        </div>

        <div class="d-none d-md-block d-lg-none mt-0">
            <div class="fullwidth-block mt-3"></div>
        </div>

        <div class="d-lg-none d-md-none">
            <div class="fullwidth-block"></div>
        </div>
    </div>



    <div class="fullwidth-block">
        <div class="container">
            <div class="product-slider-section mb-5 wow fadeInRight" data-wow-delay=".2s">
                <div class="container pt-5 pb-0">
                    <div id="productslider" class="carousel slider">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="row pb-0">
                                    <div class="col-12">
                                        <div class="carousel-inner">

                                            <div class="carousel-item active zoom-image">
                                                <img src="{{ asset('library/paket/'.$detail->img1) }}" class="img-fluid"
                                                    alt="produk kiano travel" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/paket/'.$detail->img2) }}" class="img-fluid"
                                                    alt="produk kiano travel" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/paket/'.$detail->img3) }}" class="img-fluid"
                                                    alt="produk kiano travel" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/paket/'.$detail->img4) }}" class="img-fluid"
                                                    alt="produk kiano travel" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/paket/'.$detail->img5) }}" class="img-fluid"
                                                    alt="produk kiano travel" width="800" height="500">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <ol class="carousel-indicators position-static m-0 justify-content-start">
                                            <li data-target="#productslider" data-slide-to="0" class="active">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/paket/'.$detail->img1) }}"
                                                        alt="Produk kiano travel" class="img-fluid max-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="1">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/paket/'.$detail->img2) }}"
                                                        alt="Produk kiano travel" class="img-fluid mx-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="2">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/paket/'.$detail->img3) }}"
                                                        alt="Produk kiano travel" class="img-fluid mx-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="3">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/paket/'.$detail->img4) }}"
                                                        alt="Produk kiano travel" class="img-fluid mx-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="4">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/paket/'.$detail->img5) }}"
                                                        alt="produk kiano travel" class="img-fluid mx-width">
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6">
                                <div class="d-flex justify-content-between mb-0">
                                    @if($detail->harga_promo == "")
                                    <div class="row">
                                        <div class="col-md-12 py-2">
                                            <h2 class="p-0 mb-0">{{ $detail->nama_paket }}</h2>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-12 py-2">
                                            <h2 class="p-0 mb-0">{{ $detail->nama_paket }} <span
                                                    class="badge bg-primary">Promo</span></h2>
                                        </div>
                                    </div>
                                    @endif


                                    <div class="mb-0">
                                        <a href="#" class="text-primary mx-2"><i class="bi bi-share-fill"
                                                style="font-size: 25px;"></i></a>
                                    </div>
                                </div>
                                <p class="text-capitalize mb-0"><b>{{ __('tour.wilayahtour') }} {{ $detail->wilayah
                                        }}</b></p>

                                @include('admin.stars.detailstars')

                                <?php
                                    function tgl_indo($tanggal){
                                        $bulan = array (
                                            1 =>   'Januari',
                                            'Februari',
                                            'Maret',
                                            'April',
                                            'Mei',
                                            'Juni',
                                            'Juli',
                                            'Agustus',
                                            'September',
                                            'Oktober',
                                            'November',
                                            'Desember'
                                        );
                                        $pecahkan = explode('-', $tanggal);
                                        
                                    
                                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                    }
                                    
                                    $hariini = tgl_indo(date('Y-m-d')); // 21 Oktober 2017
                                ?>




                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <p class="mb-2">
                                            <b class="text-dark">{{ __('label.labelhari') }}</b> <br>
                                            {{ $hariini }}
                                        </p>

                                        <div class="d-flex">
                                            <div class="me-3">
                                                <p class="mb-0" style="font-size: 16px;">{{ __('label.waktu') }}</p>
                                                <p style="font-size: 14px;"><i class="bi bi-calendar-event-fill"></i> {{
                                                    $detail->hari }} {{ __('label.hari') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="contact-form mt-0 mb-0">
                                    <h3 class="mb-2">{{ __('label.labeldesc') }}</h3>
                                    @if(app()->getLocale()=='id')
                                        @if($detail->keterangan == "")
                                            <article class="text-secondary bg-transparent"
                                            style="border: none; text-align: justify; margin: 0;" readonly>
                                            Maaf sepertinya admin tidak menambahkan informasai konten pada bagian ini.</article>
                                        @else
                                            <article class="text-secondary bg-transparent"
                                            style="border: none; text-align: justify; margin: 0;" readonly>{!!
                                            $detail->keterangan !!}</article>
                                        @endif
                                    @else
                                        @if($detail->description == "")
                                            <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>
                                                Sorry, it looks like the admin didn't add content information in this section
                                            </article>
                                        @else
                                            <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>
                                                {!! $detail->description !!}
                                            </article>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="filter-links filterable-nav mb-5">
                <select class="mobile-filter">
                    <option value=".Kendaraan">{{__('tour.acara')}}</option>
                    <option value=".penginapan">{{__('tour.penginapan')}}</option>
                    <option value=".Transportasi">{{__('tour.transport')}}</option>
                    <option value=".Kendaraan">{{__('tour.kendaraan')}}</option>
                </select>
                <a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".perjalanan"><i
                        class="bi bi-map-fill"></i> {{__('tour.acara')}}</a>
                <a href="#" class="current wow fadeInRight" data-wow-delay=".2s" data-filter=".penginapan"><i
                        class="fa-solid fa-hotel"></i> {{__('tour.penginapan')}}</a>
                <a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".Transportasi"><i
                        class="fa-solid fa-truck-plane"></i> {{__('tour.transport')}}</a>
                <a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".Kendaraan"><i
                        class="fa-solid fa-car"></i> {{__('tour.kendaraan')}}</a>
            </div>

            {{-- detail paket --}}
            <div class="filterable-items wow fadeInRight" data-wow-delay=".2s">
                <div class="perjalanan">
                    <div class="product-slider-section mb-5 mt-5">
                        <div class="container pb-0">
                            <div id="productslider1" class="carousel slider">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-form mt-0 mb-0">
                                            <h3>{{__('tour.acara')}}</h3>
                                            @if(app()->getLocale()=='id')
                                                @if($detail->acara == "")
                                                    <article class="text-secondary bg-transparent"
                                                        style="border: none; text-align: justify; margin: 0;" readonly>
                                                        Maaf sepertinya admin tidak menambahkan informasai konten pada bagian ini.
                                                    </article>
                                                @else
                                                    <article class="text-secondary bg-transparent"
                                                        style="border: none; text-align: justify; margin: 0;" readonly>
                                                        {!! $detail->acara !!}
                                                    </article>
                                                @endif
                                            @else
                                                @if($detail->program == "")
                                                    <article class="text-secondary bg-transparent"
                                                        style="border: none; text-align: justify; margin: 0;" readonly>
                                                        Sorry, it looks like the admin didn't add content information in this section
                                                    </article>
                                                @else
                                                    <article class="text-secondary bg-transparent"
                                                        style="border: none; text-align: justify; margin: 0;" readonly>
                                                        {!! $detail->program !!}
                                                    </article>
                                                @endif
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- detail hotel --}}
            <div class="filterable-items wow fadeInRight" data-wow-delay=".2s">
                <div class="penginapan">
                    @foreach($produk as $prd)
                    @if($prd->kode_produk == $detail->id_hotel)
                    <div class="product-slider-section mb-5 mt-5">
                        <div class="container pb-0">
                            <div id="productslider1" class="carousel slider">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-5">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="{{ asset('library/logoperusahaan/'. $prd->logo ) }}"
                                                        alt="Travel image" width="90" class="" alt="logo">
                                                </div>
                                                <div class="col-md-12 m-auto p-auto">
                                                    <h2 class="p-0">{{ $prd->nama_brand }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        @include('admin.stars.produkstars')
                                        <p class="text-capitalize mb-0">
                                            <b>{{ $prd->countries }} | {{ $prd->district }} |  {{ $prd->subdistrict }}</b>
                                        </p>
                                        <p>{{ $prd->alamat }}</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 class="mb-3">{{__('label.labelfasilitas')}}</h3>
                                                
                                                <h4 class="mb-2"><i class="fa-solid fa-bed"></i> {{ $prd->nilai }} {{ __('label.bedsleep') }}</h4>

                                                @if($prd->fasilitas5 == "1")
                                                <h4 class="mb-2"><i class="fa-solid fa-tv"></i> TV</h4>
                                                @else
                                                <h4 class="mb-2" style="text-decoration: line-through;"><i class="fa-solid fa-tv"></i> TV</h4>    
                                                @endif

                                                @if($prd->fasilitas1 == "1")
                                                <h4 class="mb-2"><i class="bi bi-wifi"></i> {{__('label.fa1')}} <span class="badge bg-success">{{ __('label.gratis') }}</span></h4>
                                                @else
                                                <h4 class="mb-2" style="text-decoration: line-through;"><i class="bi bi-wifi"></i> {{__('label.fa1')}} <span class="badge bg-success">{{ __('label.gratis') }}</span></h4>    
                                                @endif

                                                @if($prd->fasilitas6 == "1")
                                                <h4 class="mb-2"><img src="{{ URL::to('assets/admin.assets/icon/acicon.png') }}" class="img-fluid" width="20" alt=""> AC (Air Conditioner)</span></h4>
                                                @else
                                                <h4 class="mb-2" style="text-decoration: line-through;"><img src="{{ URL::to('assets/admin.assets/icon/acicon.png') }}" class="img-fluid" width="20" alt=""> AC (Air Conditioner)</span></h4>    
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <h3 class="mb-3">{{__('label.labelfasilitastambahan')}}</h3>

                                                @if($prd->fasilitas2 == "1")
                                                <h4 class="mb-2"><i class="bi bi-cup-hot-fill"></i> {{__('label.fa2')}} <span class="badge bg-success">{{ __('label.gratis') }}</span></h4>
                                                @else
                                                <h4 class="mb-2" style="text-decoration: line-through;"><i class="bi bi-cup-hot-fill"></i> {{__('label.fa2')}} <span class="badge bg-success">{{ __('label.gratis') }}</span></h4>
                                                @endif
                                                @if($prd->fasilitas3 == "1")
                                                <h4 class="mb-2"><i class="fa-solid fa-person-swimming"></i> {{__('label.fa3')}}</h4>
                                                @else
                                                <h4 class="mb-2" style="text-decoration: line-through;"><i class="fa-solid fa-person-swimming"></i> {{__('label.fa3')}}</h4>
                                                @endif
                                                @if($prd->fasilitas4 == "1")
                                                <h4 class="mb-2"><i class="fa-solid fa-umbrella-beach"></i> {{__('label.fa4')}}</h4>
                                                @else
                                                <h4 class="mb-2" style="text-decoration: line-through;"><i class="fa-solid fa-umbrella-beach"></i> {{__('label.fa4')}}</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-md-6">
                                        <div class="contact-form mt-0 mb-0">
                                            <h3>{{ __('tour.about_hotel') }}</h3>
                                            @if(app()->getLocale()=='id')
                                                @if($prd->keterangan == "")
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>Maaf sepertinya admin tidak menambahkan informasai konten pada bagian ini.</article>
                                                @else
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>{!! $prd->keterangan !!}</article>
                                                @endif
                                            @else
                                                @if($prd->description == "")
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>Sorry, it looks like the admin didn't add content information in this section</article>
                                                @else
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>{!! $prd->description !!}</article>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                    @endforeach
                </div>
            </div>

            {{-- detail Transport --}}
            <div class="filterable-items wow fadeInRight" data-wow-delay=".2s">
                <div class="Transportasi">
                    @foreach($produk as $prd)
                    @if($prd->kode_produk == $detail->id_transport)
                    <div class="product-slider-section mb-5 mt-5" id="transportasi">
                        <div class="container pb-0">
                            <div id="productslider" class="carousel slider">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-5">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="{{ asset('library/logoperusahaan/'. $prd->logo ) }}"
                                                        alt="Travel image" width="90" class="" alt="logo">
                                                </div>
                                                <div class="col-md-12 m-auto p-auto">
                                                    <h2 class="p-0">{{ $prd->nama_brand }}</h2>
                                                </div>
                                            </div>
                                        </div>

                                        @include('admin.stars.produkstars')

                                        @if($prd->tipe_produk == "pesawat")
                                        <div class="d-flex">
                                            <div>
                                                <p class="mb-0" style="font-size: 12px;">{{__('label.brangkat')}}</p>
                                                <p style="font-size: 13px;"><i class="fa-solid fa-plane-departure"></i>
                                                    {{
                                                    $prd->keberangkatan }}</p>
                                            </div>

                                            <div class="mx-3 mt-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>

                                            <div>
                                                <p class="mb-0" style="font-size: 12px;">{{__('label.tujuan')}}</p>
                                                <p style="font-size: 13px;"><i class="fa-solid fa-plane-arrival"></i> {{
                                                    $prd->tujuan }}</p>
                                            </div>
                                        </div>
                                        @elseif($prd->tipe_produk == "bus")
                                        <div class="d-flex">
                                            <div>
                                                <p class="mb-0" style="font-size: 12px;">{{__('label.brangkat')}}</p>
                                                <p style="font-size: 13px;"><i class="fa-solid fa-bus"></i> {{
                                                    $prd->keberangkatan }}</p>
                                            </div>

                                            <div class="mx-3 mt-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>

                                            <div>
                                                <p class="mb-0" style="font-size: 12px;">{{__('label.tujuan')}}</p>
                                                <p style="font-size: 13px;"><i class="fa-solid fa-bus"></i> {{
                                                    $prd->tujuan }}</p>
                                            </div>
                                        </div>
                                        @elseif($prd->tipe_produk == "kereta")
                                        <div class="d-flex">
                                            <div>
                                                <p class="mb-0" style="font-size: 12px;">{{__('label.berangkat')}}</p>
                                                <p style="font-size: 13px;"><i class="fa-solid fa-train"></i> {{
                                                    $prd->keberangkatan }}</p>
                                            </div>

                                            <div class="mx-3 mt-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>

                                            <div>
                                                <p class="mb-0" style="font-size: 12px;">{{__('label.tujuan')}}</p>
                                                <p style="font-size: 13px;"><i class="fa-solid fa-train"></i> {{
                                                    $prd->tujuan }}</p>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="mb-3 mt-2">
                                            <h3>Fasilitas</h3>
                                            <h4 class="mb-2">
                                                <img src="{{ URL::to('assets/admin.assets/icon/chair.png') }}"
                                                    class="img-fluid" width="20" alt=""> {{ $prd->nilai }} {{__('label.kursi')}}
                                            </h4>
                                            @if($prd->fasilitas2 == "1")
                                            <h4 class="mb-2"><i class="bi bi-cup-hot-fill"></i> {{__('label.makan')}} <span
                                                    class="badge bg-success">{{__('label.gratis')}}</span></h4>
                                            @else
                                            <h4 class="mb-2" style="text-decoration: line-through;"><i
                                                    class="bi bi-cup-hot-fill"></i> {{__('label.makan')}} <span
                                                    class="badge bg-success">{{__('label.gratis')}}</span></h4>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-md-6">
                                        @if($prd->tipe_produk == "pesawat")
                                        <div class="mb-3 row">
                                            <div class="col-md-4 text-center">
                                                <p class="mb-0 text-secondary">Terminal</p>
                                                <p class="mb-0 text-dark"><b>{{__('label.berangkat')}}</b></p>
                                                <h4><i class="fa-solid fa-plane-departure"></i> {{
                                                    $prd->terminal1 }}</h4>
                                            </div>

                                            <div class="col-md-4 text-center d-none d-lg-block d-md-block">
                                                <img src="{{ URL::to('assets/apps.assets/icons/rightarrow.png') }}"
                                                    alt="" width="100" class="py-4 mx-2">
                                            </div>

                                            <div class="col-md-4 text-center d-lg-none d-md-none mb-3">
                                                <i class="bi bi-arrow-down" style="font-size: 30px;"></i>
                                            </div>

                                            <div class="col-md-4 text-center">
                                                <p class="mb-0 text-secondary">Terminal</p>
                                                <p class="mb-0 text-dark"><b>{{__('label.tujuan')}}</b></p>
                                                <h4><i class="fa-solid fa-plane-arrival"></i> {{ $prd->terminal2
                                                    }}</h4>
                                            </div>
                                        </div>
                                        @elseif($prd->tipe_produk == "bus")
                                        <div class="mb-3 row">
                                            <div class="col-md-4 text-center">
                                                <p class="mb-0 text-secondary">Terminal</p>
                                                <p class="mb-0 text-dark"><b>{{__('label.berangkat')}}</b></p>
                                                <h4><i class="fa-solid fa-bus"></i> {{
                                                    $prd->terminal1 }}</h4>
                                            </div>

                                            <div class="col-md-4 text-center d-none d-lg-block d-md-block">
                                                <img src="{{ URL::to('assets/apps.assets/icons/rightarrow.png') }}"
                                                    alt="" width="100" class="py-4 mx-2">
                                            </div>

                                            <div class="col-md-4 text-center d-lg-none d-md-none mb-3">
                                                <i class="bi bi-arrow-down" style="font-size: 30px;"></i>
                                            </div>

                                            <div class="col-md-4 text-center">
                                                <p class="mb-0 text-secondary">Terminal</p>
                                                <p class="mb-0 text-dark"><b>{{__('label.tujuan')}}</b></p>
                                                <h4><i class="fa-solid fa-bus"></i> {{ $prd->terminal2
                                                    }}</h4>
                                            </div>
                                        </div>
                                        @elseif($prd->tipe_produk == "kereta")
                                        <div class="mb-3 row">
                                            <div class="col-md-4 text-center">
                                                <p class="mb-0 text-secondary">Terminal</p>
                                                <p class="mb-0 text-dark"><b>{{__('label.berangkat')}}</b></p>
                                                <h4><i class="fa-solid fa-train"></i> {{
                                                    $prd->terminal1 }}</h4>
                                            </div>

                                            <div class="col-md-4 text-center d-none d-lg-block d-md-block">
                                                <img src="{{ URL::to('assets/apps.assets/icons/rightarrow.png') }}"
                                                    alt="" width="100" class="py-4 mx-2">
                                            </div>

                                            <div class="col-md-4 text-center d-lg-none d-md-none mb-3">
                                                <i class="bi bi-arrow-down" style="font-size: 30px;"></i>
                                            </div>

                                            <div class="col-md-4 text-center">
                                                <p class="mb-0 text-secondary">Terminal</p>
                                                <p class="mb-0 text-dark"><b>{{__('label.tujuan')}}</b></p>
                                                <h4><i class="fa-solid fa-train"></i> {{ $prd->terminal2
                                                    }}</h4>
                                            </div>
                                        </div>
                                        @endif



                                        <div class="contact-form mt-0 mb-0">
                                            <h3>{{ __('tour.about_transport') }}</h3>
                                            @if(app()->getLocale()=='id')
                                                @if($prd->keterangan == "")
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>Maaf sepertinya admin tidak menambahkan informasai konten pada bagian ini.</article>
                                                @else
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>{!! $prd->keterangan !!}</article>
                                                @endif
                                            @else
                                                @if($prd->description == "")
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>Sorry, it looks like the admin didn't add content information in this section</article>
                                                @else
                                                <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>{!! $prd->description !!}</article>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                    @endforeach
                </div>
            </div>

            {{-- detail rental mobil --}}
            <div class="filterable-items wow fadeInRight" data-wow-delay=".2s">
                <div class="Kendaraan">
                    @foreach($rental as $prd)
                    @if($prd->kode_produk == $detail->id_rental)
                    <div class="product-slider-section mb-5 mt-5" id="rental">
                        <div class="container pb-0">
                            <div id="productslider" class="carousel slider">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img src="{{ asset('library/logoperusahaan/'. $prd->logo ) }}"
                                                            alt="Travel image" width="90" class="" alt="logo">
                                                    </div>
                                                    <div class="col-md-12 m-auto p-auto">
                                                        <h2 class="p-0 mb-3">{{ $prd->nama_brand }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @include('admin.stars.produkstars')

                                        <div class="mb-3">
                                            <h4 class="mb-2">
                                                {{ __('tour.penumpang') }}
                                                <img src="{{ URL::to('assets/admin.assets/icon/chair.png') }}"
                                                    class="img-fluid" width="20" alt=""> {{ $prd->nilai }} {{ __('label.kursi') }}
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-md-6 mb-5">
                                        <div class="contact-form mt-0 mb-0">
                                            <h3>{{ __('tour.about_rental') }}</h3>
                                            @if(app()->getLocale()=='id')
                                                @if($prd->keterangan == "")
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>Maaf sepertinya admin tidak menambahkan informasai konten pada bagian ini.</article>
                                                @else
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>{!! $prd->keterangan !!}</article>
                                                @endif
                                            @else
                                                @if($prd->description == "")
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>Sorry, it looks like the admin didn't add content information in this section</article>
                                                @else
                                                    <article class="text-secondary bg-transparent" style="border: none; text-align: justify; margin: 0;" readonly>{!! $prd->description !!}</article>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                    @endforeach
                </div>
            </div>

            {{-- Total Harga --}}
            <div class="card wow fadeInDown" data-wow-delay=".2s">
                <div class="card-body">
                    <h2 class="mb-0"><i class="fa-solid fa-wallet"></i> {{ __('tour.rincian') }}</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            @foreach($produk as $prd)
                            @if($prd->kode_produk == $detail->id_hotel)
                            <h4><i class="fa-solid fa-hotel"></i> {{$prd->nama_brand}} x {{$prd->nilai}} {{ __('label.orang') }} :
                                @currency($prd->harga)</h4>
                            @else
                            @endif
                            @endforeach

                            @foreach($produk as $prd)
                            @if($prd->kode_produk == $detail->id_transport)
                            <h4><i class="fa-solid fa-truck-plane"></i> {{$prd->nama_brand}} x {{$prd->nilai}} {{ __('label.orang') }} :
                                @currency($prd->harga)</h4>
                            @else
                            @endif
                            @endforeach

                            @foreach($rental as $prd)
                            @if($prd->kode_produk == $detail->id_rental)
                            <h4><i class="fa-solid fa-car"></i> {{$prd->nama_brand}} x {{$prd->nilai}} {{ __('label.orang') }} :
                                @currency($prd->harga)</h4>
                            @else
                            @endif
                            @endforeach
                        </div>

                        <div class="col-md-3 text-end">
                            <h2>{{ __('tour.label_total') }}</h2>
                            @if($detail->harga_promo == "")
                            <span class="text-dark" style="font-size: 23px;">@currency($detail->total_harga)</span>
                            @else
                            <span class="badge bg-success" style="font-size: 15px;">Promo</span>
                            <span class="text-dark" style="font-size: 23px;">@currency($detail->harga_promo)</span><br>
                            <span class="old-price" style="font-size: 18px;">@currency($detail->total_harga)</span>
                            @endif

                            <div class="mt-4 row">
                                <div class="col-12">
                                    <a href="" class="btn btn-success col-12 col-lg-12"><i
                                            class="fa-brands fa-shopify"></i> {{ __('tour.btnpesan') }}</a>
                                </div>
                                <div class="col-12">
                                    <form action="/add_cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$detail->kode_paket}}">
                                        @if($detail->harga_promo == "")
                                        <input type="hidden" name="harga" value="{{$detail->total_harga}}">
                                        @else
                                        <input type="hidden" name="harga" value="{{$detail->harga_promo}}">
                                        <input type="hidden" name="oldharga" value="{{$detail->total_harga}}">
                                        @endif

                                        <input type="hidden" name="type" value="paket">
                                        <button type="submit" class="btn btn-warning mt-3 col-12"><i
                                                class="fa-solid fa-cart-shopping"></i> {{ __('tour.btnkeranjang') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="d-none d-lg-block d-md-none mt-3">
        <div class="fullwidth-block"></div>
    </div>

    <div class="d-none d-md-block d-lg-none mt-5">
        {{-- <div class="fullwidth-block"></div> --}}
    </div>

    <div class="d-lg-none d-md-none mt-5">
        <div class="fullwidth-block mt-5"></div>
        <div class="fullwidth-block"></div>
        <div class="fullwidth-block"></div>
    </div>


</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection