@extends('layouts.adminlayouts.admins')
@section('location','active')
@section('title', 'Master Wilayah')
@section('subtitle', 'Wilayah')
@section('content')


<!----Sidebar lacoation::START--------->
<div class="min-height-300 bg-white position-absolute w-100" style="background: url('{{ URL::to('assets/admin.assets/background/bgdashboard.png') }}'); background-repeat: no-repeat; background-position: center;
  background-size: cover;">
    <div style="background: black; opacity: 32%;" class="min-height-300 w-100"></div>
</div>
@include('admin.sidebar.sidebar')
<!----Sidebar location::END--------->


<?php
    $random =  mt_rand(1000, 9999);
    $idprov = 'prov'.sprintf("%02s", $random).date('i').date('s');

    $random =  mt_rand(1000, 9999);
    $idkab = 'kab'.sprintf("%02s", $random).date('i').date('s');

    $random =  mt_rand(1000, 9999);
    $idkec = 'kec'.sprintf("%02s", $random).date('i').date('s');
?>

<main class="main-content position-relative border-radius-lg ">
    <style>
        .location {
          overflow: auto;
          white-space: nowrap;
          padding:10px; 
          height:150px;
        }
    </style>
    
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
                    <form action="{{ route('search.location') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="all" value="{{ request('all') }}" placeholder="Wilayah..">
                        </div>
                    </form>
                </div>
                

                @include('admin.profile.navprofile')
            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    <div class="container-fluid py-4">
        <!-----------Count Location::START------------->
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
                                    <i class="bi bi-calendar-event-fill" style="font-size: 35px; color: #A7A7A7;"></i>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Provinsi</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $prov->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-geo-fill" style="font-size: 35px; color: #A7A7A7;"></i>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Kabupaten</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $kab->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-geo-fill" style="font-size: 35px; color: #A7A7A7;"></i>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Kecamatan</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $kec->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-geo-fill" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------Count Location::END------------->

        <div style="min-height: 65vh;">
            @include('admin.table.tbllocation')
        </div>


        @include('admin.footer.footer')
    </div>
</main>




<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------Modal Form CRUD--------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!-- START::CRUD PROVINSI-->
@include('admin.form.wilayah.crudprov')
<!-- END::CRUD PROVINSI-->




<!-- START::CRUD KECAMATAN-->
@include('admin.form.wilayah.crudkab')
<!-- END::CRUD KECAMATAN-->
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------Modal Form CRUD--------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------Table Wilayah------------------------------------------------------------------>
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!-- START::Table KABUPATEN-->
@include('admin.table.tblkab')
<!-- END::Table KABUPATEN-->
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------Table Wilayah------------------------------------------------------------------>
<!-------------------------------------------------------------------------------------------------------------------------------------------->





@endsection