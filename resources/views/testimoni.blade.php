@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Kiano Travel')
@section('title', 'Tentang Kami')
@section('testimoni','current-menu-item')
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
            <li data-background="{{URL::to('assets/apps.assets/content/testimoni.png')}}" class="slider">
                
                <div class="container">
                    <div class="slide-caption bg-transparent col-md-12 p-auto mb-0">
                        @if(app()->getLocale()=='id')
                        <p class="slide-title text-white text-center mb-0" style="font-weight: 800;">Testimoni</p>   
                        @else
                        <p class="slide-title text-white text-center mb-0" style="font-weight: 800;">Testimonial</p>  
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
                          <img src="{{ url('library/testimoni/'. $data->image_testimoni) }}" alt="" class=" img-fluid" id="output">
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




            @forelse($ulasan1 as $data)
            <div class="container">
                <div class="container row mt-4 mb-3">
                    <div class="col-md-3">
                        <img src="{{ url('library/testimoni//'. $data->image_testimoni) }}" alt="" class="img-fluid image">
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





            @forelse($ulasan2 as $data)
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
                                <img src="{{ url('library/testimoni/'. $data->image_testimoni) }}" alt="" class="image img-fluid" id="output">
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
                                <img src="{{ url('library/testimoni/'. $data->image_testimoni) }}" alt="" class="image img-fluid" id="output">
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




    {{-- STAR:: Social Media --}}
    <div class="content1" class="fullwidth-block offers-section" data-bg-color="#fff">
    
        <div class="site-section bg-left-half">
          <div class="container owl-2-style">
            
            <div class="">
                <p class="second-title mb-0">Kiano Travel</p>
                @if(app()->getLocale()=='id')
                <h3 class="text-secondary">Lihat lebih banyak di sosial media kami</h3>
                @else
                <h3 class="text-secondary">See more on our social media</h3>
                @endif
            </div>
            
    
            <div class="owl-carousel owl-2">

                <div class="media-29101">
                    <a href="#" target="_blank" style="text-decoration:none;" class="d-flex text-dark">
                        <img src="{{URL::to('assets/admin.assets/icon/instagram.png')}}" alt="Image" style="width: 100px;" class="img-fluid"> 
                        <div class="p-3">
                            @if(app()->getLocale()=='id')
                            <p class="mb-2" style="font-size: 25px;">Instagram Kami</p>
                            @else
                            <p class="mb-2" style="font-size: 25px;">Our Instagram</p>
                            @endif
                            <p style="font-size: 15px;">Nama instagram</p>
                        </div>
                    </a>
                </div>

                <div class="media-29101">
                    <a href="#" target="_blank" style="text-decoration:none;" class="d-flex text-dark">
                        <img src="{{URL::to('assets/admin.assets/icon/facebook.png')}}" alt="Image" style="width: 100px;" class="img-fluid"> 
                        <div class="p-3">
                            @if(app()->getLocale()=='id')
                            <p class="mb-2" style="font-size: 25px;">Facebook Kami</p>
                            @else
                            <p class="mb-2" style="font-size: 25px;">Our Facebook</p>
                            @endif
                            <p style="font-size: 15px;">Nama instagram</p>
                        </div>
                    </a>
                </div>

                <div class="media-29101">
                    <a href="#" target="_blank" style="text-decoration:none;" class="d-flex text-dark">
                        <img src="{{URL::to('assets/admin.assets/icon/tiktok.png')}}" alt="Image" style="width: 100px;" class="img-fluid"> 
                        <div class="p-3">
                            @if(app()->getLocale()=='id')
                            <p class="mb-2" style="font-size: 25px;">Tiktok Kami</p>
                            @else
                            <p class="mb-2" style="font-size: 25px;">Our Tiktok</p>
                            @endif
                            <p style="font-size: 15px;">Nama instagram</p>
                        </div>
                    </a>
                </div>
              
            </div>
            
    
          </div>
        </div>
    
    </div>
    {{-- END:: Social Media --}}
</main>
@endsection