@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('judul', 'Paket Tour')
@section('title', 'Tour Package')
@section('main', 'Kiano Travel')
@section('tour','current-menu-item')
@section('content')

<main class="content">
    <div class="fullwidth-block mt-5 d-none d-lg-block d-md-block"></div>
    <div class="fullwidth-block mt-0 d-lg-none d-md-none"></div>
    <div class="fullwidth-block">
        <div class="container">  
            <!---------------search all content::start-------------->
            <div class="s003 mb-4 d-none d-lg-block d-md-block">
                <form action="{{ route('search.paket') }}" method="GET">
                    {{ csrf_field() }}
                    <div class="inner-form">

                        <div class="input-field second-wrap">
                            <input id="search" type="text" value="{{ request('all') }}" name="all"
                                placeholder="{{ __('label.placesearch') }}" onkeyup="OnChange(this.value)" autocomplete="off">
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
                <form action="{{ route('search.paket') }}" method="GET">
                    {{ csrf_field() }}                
                    <input class="input-bottom-border col-12" value="{{ request('all') }}" name="all" type="text" placeholder="{{ __('label.placesearch') }}" autocomplete="off">
                    <input type="text" name="kategori" value="{{ request('kategori') }}">
                </form>          
            </div>
            <!---------------search all content::end---------------->


            <!---navbar start--->
            <nav class="col-md-12 navbar mb-4" style="background: #F1F1F1;">
                <div class="container-fluid">
                    <span class="navbar-brand" style="font-weight: 500; font-size: 15px;">{{ __('tour.nav_tour') }}</span>
                </div>
            </nav>
            <!---navbar end--->


            <!---------------filter produk content::start------------->
            <div class="accordion accordion-flush mb-5 d-lg-none d-md-none" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                  </h2>

                  <div id="flush-colla pseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-parent="#accordionFlushExample">
                    <!---------------filter produk content::start------------->
                    <div class="container">
                        <div class="col-12 mb-3 mt-3">
                            <form action="" method="GET">
                                <div class="">
                                    <p style="font-weight: 600; font-size: 18px;">{{ __('tour.filter') }}</p>
                                 
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" style="font-size: 12px;"
                                            class="form-label mb-1">{{ __('label.kategori') }}</label>
                                        <select name="kategori" class="form-control text-secondary" id="kat" value="{{ request('kategori') }}">
                                            <option value="" selected>{{ __('label.kategori') }}</option>
                                            @foreach($kategori as $item)
                                            @if($item->tipe == "Travel")
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
                                        <select class="form-control text-secondary" name="sub1" value="{{ request('sub1') }}"> 
                                            <option value="" selected>{{ __('label.lainnya') }}</option>
                                            @foreach($subkategori as $item)
                                                @if($item->tipe == "Travel")
                                                    @if(request('sub1') == $item->subkategori) 
                                                        <option value="{{ $item->subkategori }}" selected>{{ $item->subkategori }}</option>
                                                    @else
                                                        <option value="{{ $item->subkategori }}">{{ $item->subkategori }}</option>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                        
        
                                    {{-- <div class="mb-2">
                                        <label class="form-label text-dark">{{ __('label.wilayah') }}</label>
                                        <select class="form-control text-secondary text-capitalize" name="prov" id="prov" value="{{ request('prov') }}"> 
                                            <option selected>{{ __('label.wilayah') }}</option>
                                            @foreach($provinsi as $item)
                                            @if(request('prov') == $item->provinsi) 
                                                <option value="{{ $item->provinsi }}" selected class="text-capitalize">{{ $item->provinsi }}</option>
                                            @else
                                                <option value="{{ $item->provinsi }}" class="text-capitalize">{{ $item->provinsi }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div> --}}
        
                                    
        
                                    <div class="mb-2">
                                        <label for="option">{{ __('label.rangeharga') }}</label>
                                        <div class="mb-2">
                                            <input type="number" name="min" class="form-control" min="0" placeholder="MIN" value="{{ request('min') }}">
                                        </div>
        
                                        <div>
                                            <input type="number" name="max" class="form-control" min="0" placeholder="MAX" value="{{ request('max') }}">
                                        </div>
                                    </div>
        
        
                                    <div class="mb-3">
                                        <label for="option">{{ __('label.rate') }}</label>
                
                                        <div class="form-group">
                                            @foreach($ranting as $star)
                                                @if(Request::get('ranting') == $star->ranting)
                                                    <input type="radio" class="btn-check" name="ranting" value="{{ $star->ranting }}" id="{{ $star->ranting }}" autocomplete="off" checked>
                                                    <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}1">{{ $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>                                
                                                @else     
                                                    <input type="radio" class="btn-check" name="ranting" value="{{ $star->ranting }}" id="{{ $star->ranting }}" autocomplete="off">
                                                    <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}1">{{ $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>                                
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
        
        
                                    <button type="submit" class="btn col-md-12 col-12 text-white"
                                        style="background: #00A7FF;">{{ __('label.submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!---------------filter produk content::end--------------->
                  </div>
                </div>
            </div>
            <!---------------filter produk content::end--------------->


            <div class="row">
                <!--filter search::START-->
                <div class="col-md-3 mb-3 d-none d-lg-block d-md-block">
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ route('filter.paket') }}" method="GET">
                                @csrf
                                <input type="hidden" name="all" id="val" value="{{ request('all') }}">

                                <p style="font-weight: 600; font-size: 18px;">{{ __('tour.filter') }}</p>
                                <div class="mb-2">
                                    <label for="kat" style="font-size: 12px;"
                                        class="form-label mb-1">{{ __('label.kategori') }}</label>
                                    <select name="kategori" class="form-control text-secondary" id="kat" value="{{ request('kategori') }}">
                                        <option value="" selected>{{ __('label.kategori') }}</option>
                                        @foreach($kategori as $item)
                                        @if($item->tipe == "Travel")
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
                                    <select class="form-control text-secondary" name="sub" value="{{ request('sub') }}"> 
                                        <option value="" selected>{{ __('label.lainnya') }}</option>
                                        @foreach($subkategori as $item)
                                            @if($item->tipe == "Travel")
                                                @if(request('sub') == $item->subkategori) 
                                                    <option value="{{ $item->subkategori }}" selected>{{ $item->subkategori }}</option>
                                                @else
                                                    <option value="{{ $item->subkategori }}">{{ $item->subkategori }}</option>
                                                @endif
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                    
                                {{-- <div class="mb-2">
                                    <label class="form-label text-dark">{{ __('label.wilayah') }}</label>
                                    <select class="form-control text-secondary text-capitalize" name="prov" id="prov" value="{{ request('prov') }}"> 
                                        <option selected>{{ __('label.wilayah') }}</option>
                                        @foreach($provinsi as $item)
                                        @if(request('prov') == $item->provinsi) 
                                            <option value="{{ $item->provinsi }}" selected class="text-capitalize">{{ $item->provinsi }}</option>
                                        @else
                                            <option value="{{ $item->provinsi }}" class="text-capitalize">{{ $item->provinsi }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div> --}}
    
                                <div class="mb-2">
                                    <label for="option">{{ __('label.rangeharga') }}</label>
                                    <div class="mb-2">
                                        <input type="number" name="min" class="form-control" min="0" placeholder="MIN" value="{{ request('min') }}">
                                    </div>
    
                                    <div>
                                        <input type="number" name="max" class="form-control" min="0" placeholder="MAX" value="{{ request('max') }}">
                                    </div>
                                </div>
    
                                <div class="mb-3">
                                    <label for="option">{{ __('label.rate') }}</label>
            
                                    <div class="form-group">
                                        @foreach($ranting as $star)
                                            @if(Request::get('ranting') == $star->ranting)
                                                <input type="radio" class="btn-check" name="ranting" value="{{ $star->ranting }}" id="{{ $star->ranting }}1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}1">{{ $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>                                
                                            @else     
                                                <input type="radio" class="btn-check" name="ranting" value="{{ $star->ranting }}" id="{{ $star->ranting }}1" autocomplete="off">
                                                <label class="btn btn-outline-primary btn-sm" for="{{ $star->ranting }}1">{{ $star->ranting }} <i class="fa-solid fa-star text-warning text-sm"></i></label>                                
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
    
    
                                <button type="submit" class="btn col-md-12 col-12 text-white" style="background: #00A7FF;">{{ __('label.submit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--filter search::END-->


                @include('tablesapps.tabletour')
            </div>
        </div>
    </div>

    </div>


</main>







<script type="text/javascript" language="Javascript">
    search = document.getElementById('search').value;
    document.getElementById('val').value = search;
  
    function OnChange(value){
        search = document.getElementById('search').value;
  
        document.getElementById('val').value = search;
    }
</script>


<script src="{{ URL::to('assets/apps.assets/js/search.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{URL::to('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
@endsection