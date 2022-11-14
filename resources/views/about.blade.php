@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Kiano Travel')
@section('title', 'Tentang Kami')
@section('about','current-menu-item')
@section('content')





<style>
    .image {
        width: 250px;
        height: 250px;
        border-radius: 50%;
    }
</style>



    


<main class="content">
    <div class="slider mt-5">
        <ul class="slides">
            <li data-background="{{URL::to('assets/apps.assets/content/about.png')}}" class="slider">
                
                <div class="container">
                    <div class="slide-caption bg-transparent col-md-12 p-auto mb-0">
                        @if(app()->getLocale()=='id')
                        <p class="slide-title text-white text-center mb-0" style="font-weight: 800;">Tentang Kami</p>
                        @else
                        <p class="slide-title text-white text-center mb-0" style="font-weight: 800;">About Us</p>
                        @endif
                        <p class="text-white text-center" style="font-size: 20px;">Kiano Wisata Tour</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>



    <div class="fullwidth-block">
        <div class="container">
            @forelse($keterangan as $data)
            <div class="container">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-6">
                        <div>
                          <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" class=" img-fluid" id="output">
                        </div> 
                    </div>

                    <div class="col-md-6 my-5">
                        <div class="col-md-12">
                            @if(app()->getLocale()=='id')
                                @if($data->judul == "")
                                    <h2 class="text-dark">Belum ada judul</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->judul }}</h2>
                                @endif
                            @else
                                @if($data->title == "")
                                    <h2 class="text-dark">No title</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->title }}</h2>
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 col-md-12">
                            @if(app()->getLocale()=='id')
                                @if($data->keterangan == "")
                                    <article>Tidak konten tidak ditemukan</article>
                                @else
                                    <article>{!! $data->keterangan !!}</article>
                                @endif
                            @else
                                @if($data->description == "")
                                    <article>No content not found</article>
                                @else
                                    <article>{!! $data->description !!}</article>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="container">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-6">
                        <div>
                          <img src="{{ URL::to('assets/apps.assets/content/bgnotcontent.jpg') }}" alt="" class="img-fluid" id="output">
                        </div>
                    </div>

                    <div class="col-md-6 my-5">
                        <div class="col-md-12">
                            @if(app()->getLocale()=='id')
                            <h2 class="text-dark">Belum ada judul</h2>
                            @else
                            <h2 class="text-dark">No title</h2>
                            @endif
                        </div>

                        <div class="mb-3 col-md-12">
                            @if(app()->getLocale()=='id')
                            <article>Tidak konten tidak ditemukan</article>
                            @else
                            <article>No content not found</article>
                            @endif
                        </div>
                    </div>
                </div>
            </div>  
            @endforelse


            @forelse($salam as $data)
            <div class="container">
                <div class="container row mt-4 mb-3">
                    <div class="col-md-3">
                        <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" class="img-fluid image">
                    </div>

                    <div class="col-md-9 my-5">
                        <div class="col-md-12">
                            @if(app()->getLocale()=='id')
                                @if($data->judul == "")
                                    <h2 class="text-dark">Belum ada judul</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->judul }}</h2>
                                @endif
                            @else
                                @if($data->title == "")
                                    <h2 class="text-dark">No title</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->title }}</h2>
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 col-md-12">
                            @if(app()->getLocale()=='id')
                                @if($data->keterangan == "")
                                    <article>Tidak konten tidak ditemukan</article>
                                @else
                                    <article>{!! $data->keterangan !!}</article>
                                @endif
                            @else
                                @if($data->description == "")
                                    <article>No content not found</article>
                                @else
                                    <article>{!! $data->description !!}</article>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="container">
                <div class="container row mt-4 mb-3">
                    <div class="col-md-3">
                        <img src="{{ URL::to('assets/apps.assets/content/notphoto.jpg') }}" alt="" class="img-fluid image">
                    </div>

                    <div class="col-md-9 my-5">
                        <div class="col-md-12">
                            @if(app()->getLocale()=='id')
                            <h2 class="text-dark">Belum ada judul</h2>
                            @else
                            <h2 class="text-dark">No title</h2>
                            @endif
                        </div>

                        <div class="mb-3 col-md-12">
                            @if(app()->getLocale()=='id')
                            <article>Tidak konten tidak ditemukan</article>
                            @else
                            <article>No content not found</article>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforelse


            @forelse($license as $data)
            <div class="container d-none d-lg-block">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-9 my-5">
                        <div class="col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                                @if($data->judul == "")
                                    <h2 class="text-dark">Belum ada judul</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->judul }}</h2>
                                @endif
                            @else
                                @if($data->title == "")
                                    <h2 class="text-dark">No title</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->title }}</h2>
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                                @if($data->keterangan == "")
                                    <article>Tidak konten tidak ditemukan</article>
                                @else
                                    <article>{!! $data->keterangan !!}</article>
                                @endif
                            @else
                                @if($data->description == "")
                                    <article>No content not found</article>
                                @else
                                    <article>{!! $data->description !!}</article>
                                @endif
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <div>
                                <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" class="image img-fluid" id="output">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-lg-none">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-3 text-end">
                        <div>
                            <div>
                                <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" class="image img-fluid" id="output">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 my-5">
                        <div class="col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                                @if($data->judul == "")
                                    <h2 class="text-dark">Belum ada judul</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->judul }}</h2>
                                @endif
                            @else
                                @if($data->title == "")
                                    <h2 class="text-dark">No title</h2>
                                @else
                                    <h2 class="text-dark">{{ $data->title }}</h2>
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                                @if($data->keterangan == "")
                                    <article>Tidak konten tidak ditemukan</article>
                                @else
                                    <article>{!! $data->keterangan !!}</article>
                                @endif
                            @else
                                @if($data->description == "")
                                    <article>No content not found</article>
                                @else
                                    <article>{!! $data->description !!}</article>
                                @endif
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            @empty 
            <div class="container d-lg-none">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-3 text-end">
                        <div>
                            <div>
                                <img src="{{ URL::to('assets/apps.assets/content/notphoto.jpg') }}" alt="" class="image img-fluid" id="output">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 my-5">
                        <div class="col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                            <h2 class="text-dark">Belum ada judul</h2>
                            @else
                            <h2 class="text-dark">No title</h2>
                            @endif
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                            <article>Tidak konten tidak ditemukan</article>
                            @else
                            <article>No content not found</article>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-none d-lg-block">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-9 my-5">
                        <div class="col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                            <h2 class="text-dark">Belum ada judul</h2>
                            @else
                            <h2 class="text-dark">No title</h2>
                            @endif
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            @if(app()->getLocale()=='id')
                            <article>Tidak konten tidak ditemukan</article>
                            @else
                            <article>No content not found</article>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <div>
                                <img src="{{ URL::to('assets/apps.assets/content/notphoto.jpg') }}" alt="" class="image img-fluid" id="output">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse


        </div>
    </div>




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
                <div class="media-29101">
                    <a href="{{ $data->links }}" target="_blank"><img src="{{ asset('library/patner/'.$data->img_patner) }}" alt="Image" class="img-fluid m-auto"></a>
                </div>
                @empty
                <div class="media-29101">
                    <a target="_blank"><img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="Image" class="img-fluid"></a>
                </div>
                @endforelse
              
            </div>
            
    
          </div>
        </div>
    
    </div>
    {{-- END:: Patner Brand --}}
</main>
@endsection