@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Produk Rental')
@section('subt', 'Detail')
@section('content')
<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/imagedetail.css') }}">

<main class="content">

    <div class="d-none d-lg-block d-md-none mt-3">
        <div class="fullwidth-block"></div>
        <div class="fullwidth-block"></div>
    </div>

    <div class="d-none d-md-block d-lg-none mt-0">
        <div class="fullwidth-block mt-0"></div>
        <div class="fullwidth-block mt-0"></div>
    </div>

    <div class="d-lg-none d-md-none mt-5">
        <div class="fullwidth-block mt-5"></div>
        <div class="fullwidth-block"></div>
        <div class="fullwidth-block"></div>
        <div class="fullwidth-block"></div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="product-slider-section" style="height: 100vh;">
                <div class="container pt-5 pb-0">
                    <div id="productslider" class="carousel slider">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="row pb-0">
                                    <div class="col-12">
                                        <div class="carousel-inner">

                                            <div class="carousel-item active zoom-image">
                                                <img src="{{ asset('library/produk/'.$detail->img1) }}" class="img-fluid"
                                                    alt="" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/produk/'.$detail->img2) }}" class="img-fluid"
                                                    alt="" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/produk/'.$detail->img3) }}" class="img-fluid"
                                                    alt="" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/produk/'.$detail->img4) }}" class="img-fluid"
                                                    alt="" width="800" height="500">
                                            </div>

                                            <div class="carousel-item zoom-image">
                                                <img src="{{ asset('library/produk/'.$detail->img5) }}" class="img-fluid"
                                                    alt="" width="800" height="500">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <ol class="carousel-indicators position-static m-0 justify-content-start">
                                            <li data-target="#productslider" data-slide-to="0" class="active">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/produk/'.$detail->img1) }}" alt=""
                                                        class="img-fluid max-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="1">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/produk/'.$detail->img2) }}" alt=""
                                                        class="img-fluid mx-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="2">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/produk/'.$detail->img3) }}" alt=""
                                                        class="img-fluid mx-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="3">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/produk/'.$detail->img4) }}" alt=""
                                                        class="img-fluid mx-width">
                                                </div>
                                            </li>

                                            <li data-target="#productslider" data-slide-to="4">
                                                <div class="data-slide-image">
                                                    <img src="{{ asset('library/produk/'.$detail->img5) }}" alt=""
                                                        class="img-fluid mx-width">
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="d-flex justify-content-between mb-0">  
                                    @if($detail->tipe_produk == "rental")
                                        @if($detail->harga_promo == "")
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('library/logoperusahaan/'. $detail->logo ) }}" alt="" width="150" class="img-fluid">
                                            </div>
                                            <div class="col-md-9 py-2">
                                                <h2 class="p-0">{{ $detail->nama_brand }}</h2>
                                            </div>
                                        </div>
                                        @else
                                        <div class="d-flex">
                                            <div class="col-md-3">
                                                <img src="{{ asset('library/logoperusahaan/'. $detail->logo ) }}" alt="" width="150" class="img-fluid">
                                            </div>
                                            <div class="col-md-9 py-2">
                                                <h2 class="p-0">{{ $detail->nama_brand }}</h2>
                                            </div>
                                            <h4><span class="badge bg-primary">Promo</span></h4>
                                        </div>
                                        @endif 
                                    @endif 
                                        

                                    <div>
                                        <a href="#" class="text-secondary mx-2"><i class="bi bi-share-fill" style="font-size: 25px;"></i></a>
                                    </div>
                                </div>
                                <p class="mb-1 text-capitalize"><b>{{ __('label.prov') }} {{ $detail->prov }} | {{ __('label.kab') }} {{ $detail->kab }} | {{ __('label.kec') }} {{ $detail->kec }}</b></p>
                                <article class="mb-2">{!! $detail->alamat !!}</article>

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

                                <p class="mb-2">
                                    <b class="text-dark">{{ __('label.labelhari') }}</b> <br>
                                    {{ $hariini }}
                                </p>

                                <div class="d-flex">
                                    <div class="me-3">
                                        <p class="mb-0" style="font-size: 16px;">{{ __('label.maxsewa') }}</p>
                                        <p style="font-size: 14px;"><i class="bi bi-calendar-event-fill"></i> {{ $detail->durasi_waktu }} {{ __('label.hari') }}</p>
                                    </div>
                                </div>

                                <!---Harga Start--->
                                <div class="d-lg-none">
                                    <h1 class="text-end text-dark mb-0">{{ __('label.labelharga') }}</h1>
                                    <p class="price text-end mt-1">
                                        @if($detail->harga_promo == "")
                                        <span class="text-dark"
                                            style="font-size: 23px;">@currency($detail->harga)</span>
                                        @else
                                        <span class="badge bg-success" style="font-size: 15px;">Promo</span>
                                        <span class="text-dark"
                                            style="font-size: 23px;">@currency($detail->harga)</span><br>
                                        <span class="old-price"
                                            style="font-size: 18px;">@currency($detail->harga_promo)</span>
                                        @endif
                                    </p>
                                </div>
                                <!----Harga End---->

                                <div class="row">
                                    <!---Buttom Start--->
                                    <div class="col-lg-6 col-12 col-md-12">
                                        <a href="#" class="btn btn-success mt-3 col-12"><i class="fa-brands fa-shopify"></i> Pesan Sekarang</a>
                                        <form action="/add_cart" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$detail->kode_produk}}">
                                            @if($detail->harga_promo == "")
                                            <input type="hidden" name="harga" value="{{$detail->harga}}">
                                            @else
                                            <input type="hidden" name="harga" value="{{$detail->harga_promo}}">
                                            <input type="hidden" name="oldharga" value="{{$detail->harga}}">
                                            @endif

                                            <input type="hidden" name="type" value="rental">
                                            <button type="submit" class="btn btn-warning mt-3 col-12"><i class="fa-solid fa-cart-shopping"></i> Tambah Keranjang</button>
                                        </form>
                                    </div>
                                    <!----Buttom End---->

                                    <!---Harga Start--->
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <h1 class="text-end text-dark mb-0">{{ __('label.labelharga') }}</h1>
                                        <p class="price text-end mt-1">
                                            @if($detail->harga_promo == "")
                                            <span class="text-dark"
                                                style="font-size: 23px;">@currency($detail->harga)</span>
                                            @else
                                            <span class="badge bg-success" style="font-size: 15px;">Promo</span>
                                            <span class="text-dark"
                                                style="font-size: 23px;">@currency($detail->harga)</span><br>
                                            <span class="old-price"
                                                style="font-size: 18px;">@currency($detail->harga_promo)</span>
                                            @endif
                                        </p>
                                    </div>
                                    <!----Harga End---->
                                </div>
                            </div>


                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="col-md-12 mb-0">
                                            <img src="{{ asset('library/logoperusahaan/'. $detail->logo ) }}" alt="" width="150" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-12 contact-form mt-0 px-4">
                                            <h3>{{ __('label.labeldesc') }}</h3>
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