@extends('layouts.adminlayouts.admins')
@section('kategori','active')
@section('title', 'Master Kategori')
@section('subtitle', 'Kategori')
@section('content')


<!----Sidebar kategori::START--------->
<div class="min-height-300 bg-white position-absolute w-100" style="background: url('{{ URL::to('assets/admin.assets/background/bgdashboard.png') }}'); background-repeat: no-repeat; background-position: center;
  background-size: cover;">
    <div style="background: black; opacity: 32%;" class="min-height-300 w-100"></div>
</div>
@include('admin.sidebar.sidebar')
<!----Sidebar kategori::END--------->


<main class="main-content position-relative border-radius-lg ">
    <style>
        .kategori {
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
                    <form action="{{ route('search.kategori') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="all" value="{{ request('all') }}" placeholder="Kategori..">
                        </div>
                    </form>
                </div>
                

                @include('admin.profile.navprofile')
            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    <div class="container-fluid py-4">
        <!-------------------------------Count kategori:START---------------------------------->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-3 px-4 ">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers py-2">
                                    <p class="mb-0 pt-2 pb-2 text-uppercase"
                                        style="font-size: 14px; font-weight: 600; color: #ADADAD;">Tanggal</p>
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase"
                                        style="font-size: 14px; font-weight: 600; color: #ADADAD;">Jumlah Kategori</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $kategori->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class=" col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-sort-down-alt" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <!-------------------------------Count kategori:START---------------------------------->
        

        <div style="min-height: 65vh;">
            @include('admin.table.tblkategori')
        </div>


        @include('admin.footer.footer')
    </div>
</main>















<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------Modal Form CRUD--------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------->
@include('admin.table.tblsub')


<!-- START::Tambah Kategori dan Subkategori -->
    <div class="modal fade" id="Myadd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5">

                    <form action="{{ route('insert.category') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                        </div>

                        @include('admin.form.kategori.insertkategori')

                        <div class="text-end">
                            <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="Myaddsub" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body p-5">
                    <form action="{{ route('insert.subcategory') }}" method="POST">
                        {{csrf_field()}}

                        @include('admin.form.kategori.insertsub')

                        <div class="text-end">
                            <input type="reset" class="btn btn-sm" style="background: #FFFF00;" value="Reset">
                            <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- END::Tambah Kategori dan Subkategori -->





<!-- START::Edit Kategori Utama -->
<div class="modal fade" id="Myedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.category') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit
                            Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    @include('admin.form.kategori.updatekategori')

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Myeditsub" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.subkategori') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit
                            Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    @include('admin.form.kategori.updatesub')

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END::Edit Kategori Utama -->






<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------Modal Form CRUD--------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------->
@endsection