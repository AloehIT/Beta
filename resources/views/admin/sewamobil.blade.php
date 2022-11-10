@extends('layouts.adminlayouts.admins')
@section('rental','active')
@section('title', 'Master Produk')
@section('subtitle', 'Sewa Mobil')
@section('content')


<!----Sidebar rental::START--------->
<div class="min-height-300 bg-white position-absolute w-100" style="background: url('{{URL::to('assets/admin.assets/background/bgrental.jpg')}}'); background-repeat: no-repeat; background-position: center;
  background-size: cover;">
    <div style="background: black; opacity: 32%;" class="min-height-300 w-100"></div>
</div>

@include('admin.sidebar.sidebar')
<!----Sidebar rental::END--------->



<?php
    $random1 =  mt_rand(1000, 9999);
    $kode = '-'.sprintf("%05s", $random1).date('i').date('s').date('y');
?>

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
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search"
                                aria-hidden="true"></i></span>
                        <input type="text" class="form-control px-2" onkeyup="searchFilter()"
                            placeholder="Produk..">
                    </div>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Jumlah Paket</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $produk->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="fa-solid fa-car pt-1" style="font-size: 40px; color: #A7A7A7;"></i>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>


        <div style="min-height: 65vh;">
            @include('admin.table.tblrental')    
        </div>    



        @include('admin.footer.footer')
    </div>
</main>







<div class="modal fade" id="Myadd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                <div class="row mt-3 mb-3">
                    <div class="col-md-6">
                        <h4>Tambah Produk Rental</h4>
                    </div>

                    <div class="col-md-6 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                    </div>    
                </div>

              
                @include('admin.form.rental.insert')
                
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="Myedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                <div class="text-end mb-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                </div>


                @include('admin.form.rental.update')



            </div>
        </div>
    </div>
</div>





@endsection