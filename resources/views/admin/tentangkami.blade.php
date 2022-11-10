@extends('layouts.adminlayouts.admins')
@section('about','active')
@section('title', 'Konten Page')
@section('subtitle', 'Tentang Kami')
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
        <!----------Count Konten:START------------>
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
        </div>
        <!-----------Count Konten:END------------>



        
            @forelse($keterangan as $data)
            <div class="container">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-6">
                        <div>
                          <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" class="img-fluid" width="450">
                        </div> 
                    </div>

                    <div class="col-md-6 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark">{{ $data->judul }}</h5>
                        </div>

                        <div class="mb-3 col-md-12">
                            <article style="font-size: 13px;" class="">{!! $data->keterangan !!}</article>
                        </div>

                        <div class="col-md-12">
                            <a data-bs-toggle="modal" data-judul="{{$data->judul}}" data-title="{{$data->title}}" data-keterangan="{{ $data->keterangan }}" data-description="{{ $data->description }}" data-id="{{$data->id}}" data-level="{{ $data->level }}" data-img="{{ $data->image_tentangkami }}" class="sendAbout">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#update" class="col-md-3 col-12 btn btn-primary">
                                    Update
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="container">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-6">
                        <div>
                          <img src="{{ URL::to('assets/apps.assets/content/bgnotcontent.jpg') }}" alt="" class="img-fluid" width="450">
                        </div>
                    </div>

                    <div class="col-md-6 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark">Belum Ada Judul</h5>
                        </div>

                        <div class="mb-3 col-md-12">
                            Tidak ada keterangan yang diberikan
                        </div>

                        <div class="col-md-12">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#addketerangan" class="col-md-3 col-12 btn btn-primary">Tambahkan</a>
                        </div>
                    </div>
                </div>
            </div>  
            @endforelse




            @forelse($salam as $data)
            <div class="container">
                <div class="container row mt-4 mb-3">
                    <div class="col-md-4">
                        <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" width="250" height="250" class="rounded-circle">
                    </div>

                    <div class="col-md-8 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark">{{ $data->judul }}</h5>
                        </div>

                        <div class="mb-3 col-md-12">
                            <article style="font-size: 13px;" class="">{!! $data->keterangan !!}</article>
                        </div>

                        <div class="col-md-12">
                            <a data-bs-toggle="modal" data-judul="{{$data->judul}}" data-title="{{$data->title}}" data-keterangan="{{ $data->keterangan }}" data-description="{{ $data->description }}" data-id="{{$data->id}}" data-level="{{ $data->level }}" data-img="{{ $data->image_tentangkami }}" class="sendAbout">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#update" class="col-md-3 col-12 btn btn-primary">
                                    Update
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="container">
                <div class="container row mt-4 mb-3">
                    <div class="col-md-4">
                        <img src="{{ URL::to('assets/apps.assets/content/notphoto.jpg') }}" alt="" width="250" height="250" class="rounded-circle">
                    </div>

                    <div class="col-md-8 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark">Belum Ada Judul</h5>
                        </div>

                        <div class="mb-3 col-md-12">
                            Tidak ada keterangan yang diberikan
                        </div>

                        <div class="col-md-12">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#addketerangan" class="col-md-3 col-12 btn btn-primary">Tambahkan</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse





            @forelse($license as $data)
            <div class="container d-none d-lg-block">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-8 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark text-end">{{ $data->judul }}</h5>
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            <article style="font-size: 13px;" class="">{!! $data->keterangan !!}</article>
                        </div>

                        <div class="col-md-12 text-end">
                            <a data-bs-toggle="modal" data-judul="{{$data->judul}}" data-title="{{$data->title}}" data-keterangan="{{ $data->keterangan }}" data-description="{{ $data->description }}" data-id="{{$data->id}}" data-level="{{ $data->level }}" data-img="{{ $data->image_tentangkami }}" class="sendAbout">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#update" class="col-md-3 col-12 btn btn-primary">
                                    Update
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div>
                            <div>
                                <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" width="250" height="250" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-lg-none">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-4 text-end">
                        <div>
                            <div>
                                <img src="{{ url('library/about/'. $data->image_tentangkami) }}" alt="" width="250" height="250" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark text-end">{{ $data->judul }}</h5>
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            <article style="font-size: 13px;" class="">{!! $data->keterangan !!}</article>
                        </div>

                        <div class="col-md-12">
                            <a data-bs-toggle="modal" data-judul="{{$data->judul}}" data-title="{{$data->title}}" data-keterangan="{{ $data->keterangan }}" data-description="{{ $data->description }}" data-id="{{$data->id}}" data-level="{{ $data->level }}" data-img="{{ $data->image_tentangkami }}" class="sendAbout">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#update" class="col-md-3 col-12 btn btn-primary">
                                    Update
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            @empty 
            <div class="container d-lg-none">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-4 text-end">
                        <div>
                            <div>
                                <img src="{{ URL::to('assets/apps.assets/content/notphoto.jpg') }}" alt="" width="250" height="250" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark text-end">Belum Ada Judul</h5>
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            Tidak ada keterangan yang diberikan
                        </div>

                        <div class="col-md-12">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#addketerangan" class="col-md-3 col-12 btn btn-primary">Tambahkan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-none d-lg-block">
                <div class="container row mt-4 mb-5">
                    <div class="col-md-9 my-5">
                        <div class="col-md-12">
                            <h5 class="text-dark text-end">Belum Ada Judul</h5>
                        </div>

                        <div class="mb-3 col-md-12 text-end">
                            Tidak ada keterangan yang diberikan
                        </div>

                        <div class="col-md-12">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#addketerangan" class="col-md-3 col-12 btn btn-primary">Tambahkan</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <div>
                                <img src="{{ URL::to('assets/apps.assets/content/notphoto.jpg') }}" alt="" class="image img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse


        @include('admin.footer.footer')
    </div>
</main>



<!-- Modal -->
<div class="modal fade" id="addketerangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-body">
            <form action="{{ route('add.about') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="text-end mb-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times text-danger" style="font-size: 25px"></i>
                    </button>
                </div>
    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="img-fluid" id="output">
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <input type="file" name="img" id="actual-btn" onchange="loadFile(event)"
                        hidden required />
                    <label for="actual-btn" class="img btn btn-info">Upload Gambar</label>
                </div>

                <input type="hidden" name="level" value="keterangan">
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Judul (ID)</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Slider">
                </div>
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Title (EN)</label>
                    <input type="text" class="form-control" name="title" placeholder="Title Slider">
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Keterangan</label>
                    <input id="keterangan" type="hidden" name="keterangan">
                    <trix-editor input="keterangan"></trix-editor>
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Description</label>
                    <input id="description" type="hidden" name="description">
                    <trix-editor input="description"></trix-editor>
                </div>
                
                
                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
  

<!-- Modal -->
<script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>




{{-- update --}}
@include('admin.form.about.edit')
{{-- update --}}
@endsection

