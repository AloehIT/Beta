@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Kiano Travel')
@section('title', 'Produk Travel')
@section('produk','current-menu-item')
@section('content')
<main class="content">
    <div class="fullwidth-block mt-5 d-none d-lg-block d-md-block"></div>
    <div class="fullwidth-block mt-0 d-lg-none d-md-none"></div>
    <div class="fullwidth-block">
        <div class="container">

            <!---------------menu produk content::start------------->
            <div class="mb-2">
                <a href="{{ route('hotel') }}" class="btn mb-1 text-white"
                    style="background: rgb(0, 166, 255); border-bottom: none; box-shadow: 2px 0 2px 2px rgb(224, 224, 224);">
                    <i class="fa-solid fa-hotel"></i> {{ __('label.hotel') }}
                </a>

                <a href="{{ route('pesawat') }}" class="btn mb-1"
                    style="background: white; border-bottom: none; box-shadow: 2px 0 2px 2px rgb(224, 224, 224);">
                    <i class="fa-solid fa-plane"></i> {{ __('label.pesawat') }}
                </a>

                <a href="{{ route('bus') }}" class="btn mb-1"
                    style="background: white; border-bottom: none; box-shadow: 2px 0 2px 2px rgb(224, 224, 224);">
                    <i class="fa-solid fa-bus"></i> {{ __('label.bus') }}
                </a>

                <a href="{{ route('kereta') }}" class="btn mb-1"
                    style="background: white; border-bottom: none; box-shadow: 2px 0 2px 2px rgb(224, 224, 224);">
                    <i class="fa-solid fa-train"></i> {{ __('label.kereta') }}
                </a>
            </div>
            <!---------------menu produk content::end--------------->

            <!---------------search all content::start-------------->
            <div class="s003 mb-4 d-none d-lg-block d-md-block">
                <form action="{{ route('search.hotel') }}" method="GET">
                    {{ csrf_field() }}
                    <div class="inner-form">

                        <div class="input-field second-wrap">
                            <input id="search" type="text" value="{{ request('all') }}" name="all"
                                placeholder="{{ __('label.placesearch') }}" autocomplete="off">
                        </div>



                        <div class="input-field third-wrap">
                            <button class="btn-search" type="submit">
                                {{ __('label.search') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="mb-5 mt-0 d-lg-none d-md-none">
                <form action="{{ route('search.hotel') }}" method="GET">
                    {{ csrf_field() }}                
                    <input class="input-bottom-border col-12" value="{{ request('all') }}" name="all" type="text" placeholder="{{ __('label.placesearch') }}" autocomplete="off">
                </form>          
            </div>
            <!---------------search all content::end---------------->

            <!---------------nav content::start----------------->
            <nav class="col-md-12 navbar mb-4" style="background: #F1F1F1;">
                <div class="container-fluid">
                    <span class="navbar-brand" style="font-weight: 500; font-size: 15px;">{{ __('label.navproduk') }}</span>
                </div>
            </nav>
            <!---------------nav content::end------------------->

            <!---------------filter produk content::start------------->
            <div class="accordion accordion-flush mb-5 d-lg-none d-md-none" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                  </h2>

                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-parent="#accordionFlushExample">
                    <!---------------filter produk content::start------------->
                    <div class="col-12 mb-3" x-data="Filter()">
                        <div class="card">
                            <div class="card-body p-4">
                                @if(app()->getLocale()=='id')
                                <p style="font-weight: 600; font-size: 18px;">Filter Lainnya</p>
                                @else
                                <p style="font-weight: 600; font-size: 18px;">More Filters</p>
                                @endif

                                <div class="mb-2">
                                    <label for="exampleInputEmail1" style="font-size: 12px;"
                                        class="form-label mb-1">{{ __('label.kategori') }}</label>
                                    <select name="kategori" class="form-control text-secondary text-capitalize" id="kat"
                                        value="{{ request('kategori') }}">
                                        <option value="" selected>{{ __('label.kategori') }}</option>
                                        @foreach($kategori as $item)
                                        @if($item->tipe == "Rental")
                                        @else
                                        @if(request('kategori') == $item->id_kategori)
                                        <option value="{{ $item->id_kategori }}" selected>{{ $item->nama_kategori }}</option>
                                        @else
                                        <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                                        @endif
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
        
                                <div class="mb-2">
                                    <label class="form-label text-dark">{{ __('label.lainnya') }}</label>
                                    <select class="form-control text-secondary text-capitalize" name="sub1" value="{{ request('sub1') }}">
                                        <option value="" selected>Pilih Kategori</option>
                                        @foreach($subkategori as $item)
                                        @if(request('sub1') == $item->subkategori)
                                        <option value="{{ $item->subkategori }}" selected>{{ $item->subkategori }}</option>
                                        @else
                                        <option value="{{ $item->subkategori }}">{{ $item->subkategori }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
        
        
                                <div class="mb-2">
                                    <label class="form-label text-dark">{{ __('label.wilayah') }}</label>
                                    <select class="form-control text-secondary text-capitalize" name="prov" id="prov1"
                                        value="{{ request('prov') }}">
                                        <option selected>{{ __('label.prov') }}</option>
                                        @foreach($nation as $item)
                                        @if(request('prov') == $item->nation)
                                        <option value="{{ $item->nation }}" selected>{{ $item->nation }}</option>
                                        @else
                                        <option value="{{ $item->nation }}">{{ $item->nation }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
        
                                <div class="mb-2">
                                    <select class="form-control text-secondary text-capitalize" name="kab" id="kab1"
                                        value="{{ request('kab') }}">
                                        <option selected>{{ __('label.kab') }}</option>
                                    </select>
                                </div>
        
                                <div class="mb-2">
                                    <select class="form-control text-secondary text-capitalize" name="kec" id="kec1"
                                        value="{{ request('kec') }}">
                                        <option selected>{{ __('label.kec') }}</option>
                                    </select>
                                </div>
        
        
        
                                <div class="mb-2">
                                    <label for="option">{{ __('label.rangeharga') }}</label>
                                    <div class="mb-2">
                                        <input type="number" name="min" class="form-control" min="0" placeholder="MIN"
                                            value="{{ request('min') }}">
                                    </div>
        
                                    <div>
                                        <input type="number" name="max" class="form-control" min="0" placeholder="MAX"
                                            value="{{ request('max') }}">
                                    </div>
                                </div>
        
        
                                <div class="mb-3">
                                    <div>
                                        <label for="option">{{ __('label.rate') }}</label>
        
                                        <div>
                                            @foreach($ranting as $star)
                                            @if(Request::get('ranting') == $star->ranting)
                                            <input type="checkbox" class="btn-check" name="ranting" value="{{ $star->ranting }}"
                                                id="{{ $star->ranting }}" autocomplete="off" checked>
                                            <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}">{{
                                                $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>
                                            @else
                                            <input type="checkbox" class="btn-check" name="ranting" value="{{ $star->ranting }}"
                                                id="{{ $star->ranting }}" autocomplete="off">
                                            <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}">{{
                                                $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
    
    
                                <button type="button" @click="submit()" class="btn col-md-12 col-12 text-white"
                                    style="background: #00A7FF;">{{ __('label.submit') }}</button>
                            </div>
                        </div>
                    </div>
                    <!---------------filter produk content::end--------------->
                  </div>
                </div>
            </div>
            <!---------------filter produk content::end--------------->

            <div class="row">
                <!---------------filter produk content::start------------->
                <div class="col-lg-3 col-md-5 mb-3 d-none d-lg-block d-md-block">
                    <div class="card">
                        <div class="card-body p-4">
                            @if(app()->getLocale()=='id')
                                <p style="font-weight: 600; font-size: 18px;">Filter Lainnya</p>
                            @else
                                <p style="font-weight: 600; font-size: 18px;">More Filters</p>
                            @endif

                            <div class="mb-2">
                                <label for="exampleInputEmail1" style="font-size: 12px;"
                                    class="form-label mb-1">{{ __('label.kategori') }}</label>
                                <select name="kategori" class="form-control text-secondary text-capitalize" id="kat"
                                    value="{{ request('kategori') }}">
                                    <option value="" selected>{{ __('label.kategori') }}</option>
                                    @foreach($kategori as $item)
                                    @if($item->tipe == "Rental")
                                    @else
                                    @if(request('kategori') == $item->id_kategori)
                                    <option value="{{ $item->id_kategori }}" selected>{{ $item->nama_kategori }}</option>
                                    @else
                                    <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                                    @endif
                                    @endif
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <label class="form-label text-dark">{{ __('label.lainnya') }}</label>
                                <select class="form-control text-secondary text-capitalize" name="sub1" value="{{ request('sub1') }}">
                                    <option value="" selected>{{ __('label.lainnya') }}</option>
                                    @foreach($subkategori as $item)
                                    @if(request('sub1') == $item->subkategori)
                                    <option value="{{ $item->subkategori }}" selected>{{ $item->subkategori }}</option>
                                    @else
                                    <option value="{{ $item->subkategori }}">{{ $item->subkategori }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
    
    
                            <div class="mb-2">
                                <label class="form-label text-dark">{{ __('label.wilayah') }}</label>
                                <select class="form-control text-secondary text-capitalize" name="prov" id="prov"
                                    value="{{ request('prov') }}">
                                    <option selected>{{ __('label.prov') }}</option>
                                    @foreach($nation as $item)
                                    @if(request('prov') == $item->nation)
                                    <option value="{{ $item->nation }}" selected>{{ $item->nation }}</option>
                                    @else
                                    <option value="{{ $item->nation }}">{{ $item->nation }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <select class="form-control text-secondary text-capitalize" name="kab" id="kab"
                                    value="{{ request('kab') }}">
                                    <option selected>{{ __('label.kab') }}</option>
                                </select>
                            </div>
    
                            <div class="mb-2">
                                <select class="form-control text-secondary text-capitalize" name="kec" id="kec"
                                    value="{{ request('kec') }}">
                                    <option selected>{{ __('label.kec') }}</option>
                                </select>
                            </div>
    
    
    
                            <div class="mb-2">
                                <label for="option">{{ __('label.rangeharga') }}</label>
                                <div class="mb-2">
                                    <input type="number" name="min" class="form-control" min="0" placeholder="MIN"
                                        value="{{ request('min') }}">
                                </div>
    
                                <div>
                                    <input type="number" name="max" class="form-control" min="0" placeholder="MAX"
                                        value="{{ request('max') }}">
                                </div>
                            </div>
    
    
                            <div class="mb-3">
                                <div>
                                    <label for="option">{{ __('label.rate') }}</label>
    
                                    <div>
                                        @foreach($ranting as $star)
                                        @if(Request::get('ranting') == $star->ranting)
                                        <input type="checkbox" class="btn-check" name="ranting" value="{{ $star->ranting }}"
                                            id="{{ $star->ranting }}" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}">{{
                                            $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>
                                        @else
                                        <input type="checkbox" class="btn-check" name="ranting" value="{{ $star->ranting }}"
                                            id="{{ $star->ranting }}" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}">{{
                                            $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
    
    
                            <button type="submit" class="btn col-md-12 col-12 text-white"
                                style="background: #00A7FF;">{{ __('label.submit') }}</button>
                        </div>
                    </div>
                </div>
                <!---------------filter produk content::end--------------->
                
                @include('tablesapps.tablehotel')
            </div>
        </div>
    </div>

    </div>


</main>










<script src="{{ URL::to('assets/apps.assets/js/search.js') }}"></script>
<script src="{{ URL::to('assets/apps.assets/js/search.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{URL::to('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript">
    //Wilayah
    $('#prov').change(function(){
        var kab = $(this).val();    

        if(kab){
            $.ajax({
                type:"GET",
                url: '/getProv/'+kab,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#kab").empty();
                        $("#kab").append('<option>{{ __('label.kab') }}</option>');
                        $("#kec").empty();
                        $("#kec").append('<option>{{ __('label.kec') }}</option>');

                        $.each(data,function(key, kab){
                            $("#kab").append('<option value="'+kab.kab+'">'+kab.kab+'</option>');
                        });
                    }else{
                        $("#kab").empty();
                        $("#kec").empty();
                    }
                }
            });
        }else{
            $("#kab").empty();
            $("#kec").empty();
        } 
        
    });

    $('#kab').change(function(){
        var kec = $(this).val();    

        if(kec){
            $.ajax({
                type:"GET",
                url: '/getKab/'+kec,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#kec").empty();
                        $("#kec").append('<option>{{ __('label.kec') }}</option>');

                        $.each(data,function(key, kec){
                            $("#kec").append('<option value="'+kec.kec+'">'+kec.kec+'</option>');
                        });
                    }else{
                        $("#kec").empty();
                    }
                }
            });
        }else{
            $("#kec").empty();
        } 
        
    });
 
    $('#prov1').change(function(){
        var kab = $(this).val();    

        if(kab){
            $.ajax({
                type:"GET",
                url: '/getProv/'+kab,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#kab1").empty();
                        $("#kab1").append('<option>{{ __('label.kab') }}</option>');
                        $("#kec1").empty();
                        $("#kec1").append('<option>{{ __('label.kec') }}</option>');

                        $.each(data,function(key, kab){
                            $("#kab1").append('<option value="'+kab.kab+'">'+kab.kab+'</option>');
                        });
                    }else{
                        $("#kab1").empty();
                        $("#kec1").empty();
                    }
                }
            });
        }else{
            $("#kab1").empty();
            $("#kec1").empty();
        } 
        
    });

    $('#kab1').change(function(){
        var kec = $(this).val();    

        if(kec){
            $.ajax({
                type:"GET",
                url: '/getKab/'+kec,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#kec1").empty();
                        $("#kec1").append('<option>{{ __('label.kec') }}</option>');

                        $.each(data,function(key, kec){
                            $("#kec1").append('<option value="'+kec.kec+'">'+kec.kec+'</option>');
                        });
                    }else{
                        $("#kec1").empty();
                    }
                }
            });
        }else{
            $("#kec1").empty();
        } 
        
    });
</script>


<script>
    const choices = new Choices('[data-trigger]',
    {
      searchEnabled: false,
      itemSelectText: '',
    });
</script>
@endsection