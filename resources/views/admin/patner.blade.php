@extends('layouts.adminlayouts.admins')
@section('patner','active')
@section('title', 'Konten Page')
@section('subtitle', 'Patner Kami')
@section('content')

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
        <!--------Count Patner::START-------------->
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
                                    <p class="mb-0 pt-2 pb-2 text-uppercase" style="font-size: 14px; font-weight: 600; color: #ADADAD;">Jumlah Patner</p>
                                    <h4 style="font-size: 23px; color: black;"">
                                        {{ $patner->count() }}
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
        <!----------Count Patner::END-------------->

        <div style="min-height: 65vh;">
        @include('admin.table.tblpatner')
        </div>
        


        @include('admin.footer.footer')
    </div>
</main>



<div class="modal fade" id="Myadd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('add.patner') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah
                            Patner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    <div>
                        <!--img upload--->
                        <div>
                            <!--img upload--->
                            <p class="image_upload">
                                <label class="img-upload">
                                    <style media="screen">
                                        .bg-img {
                                            background: white;
                                            border-radius: 30%;
                                            border: 4px solid #EEEEEE;
                                        }
                                    </style>
                                    <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt=""
                                        class="foto-upload bg-img img-fluid" id="output">
                                    <label class="btn-input">
                                        <input type="file" name="img_patner" onchange="loadFile(event)">
                                        <i class="bi bi-camera" aria-hidden="true" style="font-size: 40px;"></i><br>
                                    </label>
                                </label>
                            </p>
                            <!--img upload--->
                        </div>
                        <!--img upload--->
                    </div>
                    
                    
                    <div class="mb-2">
                        <label for="namakategori" class="form-label text-secondary">Patner</label>
                        <input type="text" name="nama_patner" class="form-control" id="kategorinama" required
                            placeholder="Nama Patner">
                    </div>

                    <div class="mb-2">
                        <label for="namakategori" class="form-label text-secondary">Links</label>
                        <input type="text" name="links" class="form-control" 
                            placeholder="Links">
                        <p style="font-size: 12px;" class="text-primary">! Link diatas bisa dikosongkan</p>
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach($patner as $del)
<div class="modal fade" id="Mydeleted{{ $del->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="/set-patnerkami/deleted/{{$del->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Hapus
                            Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    <div>
                        <!--img upload--->
                        <p class="image_upload">
                            <label class="img-upload">
                                <style media="screen">
                                    .bg-img {
                                        background: white;
                                        border-radius: 30%;
                                        border: 4px solid #EEEEEE;
                                    }
                                </style>
                                @if(url('library/patner/'. $del->img_patner) == "" || $del->img_patner == "" )
                                <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt=""
                                    class="foto-upload bg-img img-fluid">
                                @else
                                <img src="{{ asset('library/patner/'.$del->img_patner) }}" alt=""
                                    class="foto-upload bg-img img-fluid">
                                @endif
                                <label class="btn-input">
                                    <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
                                </label>
                            </label>
                        </p>
                        <!--img upload--->


                    </div>

                    <div class="mb-2">
                        <label for="kategori" class="form-label text-secondary">Patner</label>
                        <input type="text" name="nama_patner" class="form-control" id="kategori" readonly
                            placeholder="Nama Kategori" value="{{ $del->nama_patner }}">
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #e61515;">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>
@endsection