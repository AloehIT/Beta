@extends('layouts.adminlayouts.admins')
@section('slider','active')
@section('title', 'Konten Page')
@section('subtitle', 'Slider Page')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/admin.assets/trix/trix.css') }}">
<script type="text/javascript" src="{{ URL::to('assets/admin.assets/trix/trix.js') }}"></script>

<style>
    trix-toolbar [data-trix-button-group="file-tools"]
    {
        display: none;
    }
</style>


<!----Sidebar konten::START--------->
<div class="min-height-300 bg-white position-absolute w-100" style="background: url('{{URL::to('assets/admin.assets/background/bgkonten.png')}}'); background-repeat: no-repeat; background-position: center;
  background-size: cover;">
    <div style="background: black; opacity: 32%;" class="min-height-300 w-100"></div>
</div>

@include('admin.sidebar.sidebar')
<!----Sidebar konten::END--------->

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-5 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('title')</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">@yield('subtitle')</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>

                @include('admin.profile.navprofile')
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-3 px-4 ">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers py-2">
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Tanggal</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        <?php echo date('d M Y') ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-menu-button-wide-fill" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-3 px-4 ">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers py-2">
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Jumlah Slider</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $slider->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-menu-button-wide-fill" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row mt-4">
            <div class="col-xl-9 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-3 px-4 ">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                @if(isset($slider))
                                    @if($slider->count() > 0)
                                        @foreach($slider as $data)
                                            @if($data->id == "1")
                                            <div class="carousel-item active">
                                                <img src="{{ asset('library/slider/'. $data->img_slider) }}" class="d-block" width="800" height="400" alt="...">
                                            </div>
                                            @elseif($data->id == "2")
                                            <div class="carousel-item">
                                                <img src="{{ asset('library/slider/'. $data->img_slider) }}" class="d-block" width="800" height="400" alt="...">
                                            </div>
                                            @elseif($data->id == "3")
                                            <div class="carousel-item">
                                                <img src="{{ asset('library/slider/'. $data->img_slider) }}" class="d-block" width="800" height="400" alt="...">
                                            </div>
                                            @endif
                                        @endforeach
                                    @else
                                    <div class="carousel-item active">
                                        <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="d-block" width="800" height="500" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="d-block" width="800" height="500" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="d-block" width="800" height="500" alt="...">
                                    </div>
                                    @endif
                                @endif
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="mt-3">
                            @if(isset($slider))
                                @if($slider->count() > 0)
                                    @foreach($slider as $data)
                                        @if($data->id == "1")
                                        <a data-bs-toggle="modal" data-img="{{$data->img_slider}}" data-id="{{$data->id}}" data-links="{{$data->links}}" data-judul="{{$data->judul_slider}}" data-title="{{$data->title_slider}}" data-desk="{{$data->deskripsi_slider}}" data-desc="{{$data->description_slider}}" class="passSlider mb-2 text-center">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#upslide" class="btn text-white mb-0" style="background: #1592E6;">
                                                Detail Slider 1
                                            </button>
                                        </a>
                                        @elseif($data->id == "2")
                                        <a data-bs-toggle="modal" data-img="{{$data->img_slider}}" data-id="{{$data->id}}" data-links="{{$data->links}}" data-judul="{{$data->judul_slider}}" data-title="{{$data->title_slider}}" data-desk="{{$data->deskripsi_slider}}" data-desc="{{$data->description_slider}}" class="passSlider mb-2">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#upslide" class="btn text-white mb-0" style="background: #1592E6;">
                                                Detail Slider 2
                                            </button>
                                        </a>
                                        @elseif($data->id == "3")
                                        <a data-bs-toggle="modal" data-img="{{$data->img_slider}}" data-id="{{$data->id}}" data-links="{{$data->links}}" data-judul="{{$data->judul_slider}}" data-title="{{$data->title_slider}}" data-desk="{{$data->deskripsi_slider}}" data-desc="{{$data->description_slider}}" class="passSlider mb-2">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#upslide" class="btn text-white mb-0" style="background: #1592E6;">
                                                Detail Slider 3
                                            </button>
                                        </a>
                                        @endif
                                    @endforeach
                                @else
            
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if (count($slider) >= 3)
            <div class="col-md-3">
                <div class="text-center pt-5 mt-5 align-items-center">
                     <div class="mb-3">
                         <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="" width="120" style="border-radius: 20px;">
                     </div>
 
                     <a type="button" class="btn" style="background: #575757; color: white;">Slider Penuh</a>
                </div>
            </div>
            @else
            <div class="col-md-3">
                <div class="text-center pt-5 mt-5 align-items-center">
                     <div class="mb-3">
                         <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="" width="120" style="border-radius: 20px;">
                     </div>
 
                     <a type="button" data-bs-toggle="modal" data-bs-target="#Myadd" class="btn" style="background: #1592E6; color: white;">Tambah Slider</a>
                </div>
            </div>
            @endif     
        </div>

        


        @include('admin.footer.footer')
    </div>
</main>


{{-- modal start upload image --}}
@include('admin.form.slider.add')
@include('admin.form.slider.edit')
{{-- modal start upload image --}}
@endsection