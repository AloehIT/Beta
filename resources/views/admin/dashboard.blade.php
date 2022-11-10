@extends('layouts.adminlayouts.admins')
@section('dashboard','active')
@section('title', 'Dashboard')
@section('subtitle', 'Dashboard')
@section('content')



<!----Sidebar dashboard::START--------->
<div class="min-height-300 bg-white position-absolute w-100" style="background: url('{{URL::to('assets/admin.assets/background/bgdashboard.png')}}'); background-repeat: no-repeat; background-position: center;
  background-size: cover;">
    <div style="background: black; opacity: 32%;" class="min-height-300 w-100"></div>
</div>
@include('admin.sidebar.sidebar')
<!----Sidebar dashboard::END--------->




<main class="main-content position-relative border-radius-lg ">
    <link href="{{URL::to('assets/admin.assets/css/img.css')}}" rel="stylesheet" />
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
        <!----count data content dashboard--------->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-2 px-4 ">
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
                                    <i class="bi bi-calendar-fill" style="font-size: 35px; color: #A7A7A7;"></i>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Produk Terbaik</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $terbaik->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="fa-solid fa-route" style="font-size: 35px; color: #A7A7A7;"></i>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Patner Kami</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $patner->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="fa-solid fa-handshake" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----count data content dashboard--------->


        <div style="min-height: 65vh;">
            @include('admin.table.tbldashboard')
        </div>


        @include('admin.footer.footer')
    </div>
</main>
@endsection