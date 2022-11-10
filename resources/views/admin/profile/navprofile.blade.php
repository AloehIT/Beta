<ul class="navbar-nav  justify-content-end">
    <li class="nav-item d-flex align-items-center d-none d-lg-block">
        <div class="collapse navbar-collapse" id="navbar-list-4">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{URL::to('assets/admin.assets/background/bgdashboard.png')}}"
                            width="40" height="40" class="rounded-circle">

                        <span class="mx-1">{{ auth()->user()->username }}</span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item d-flex" href="#">
                            <img src="{{URL::to('assets/admin.assets/background/bgdashboard.png')}}"
                                width="40" height="40" class="rounded-circle">
                            <span class="mx-2 mt-2">
                                <p class="mb-0" style="line-height: 9px; font-size: 16px;">
                                    Signed in as</p>
                                <p class="font-weight-bolder">{{ auth()->user()->username }}</p>
                            </span>
                        </a>
                        <a class="dropdown-item"  type="button" data-bs-toggle="modal" data-bs-target="#profile">Edit Profile</a>
                        {{-- <a class="dropdown-item" href="#">Log Out</a> --}}
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                Log Out
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item d-flex align-items-center d-md-none d-lg-none d-xl-none">
        <div class="collapse navbar-collapse" id="navbar-list-4">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{URL::to('assets/admin.assets/background/bgdashboard.png')}}"
                            width="40" height="40" class="rounded-circle">
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item d-flex" href="#">
                            <img src="{{URL::to('assets/admin.assets/background/bgdashboard.png')}}"
                                width="40" height="40" class="rounded-circle">
                            <span class="mx-2 mt-2">
                                <p class="mb-0" style="line-height: 9px; font-size: 16px;">
                                    Signed in as</p>
                                <p class="font-weight-bolder">{{ auth()->user()->username }}</p>
                            </span>
                        </a>
                        <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#profile">Edit Profile</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                Log Out
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
            </div>
        </a>
    </li>

    <li class="nav-item px-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-white p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" style="font-size: 20px;"></i>
        </a>
    </li>

</ul>


<!-- edit users -->
<div class="modal fade" id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-3">
                
                <div class="row mt-3">
                    <div class="col-md-6">
                        <h4>Edit Profile</h4>
                    </div>
    
                    <div class="col-md-6 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times text-danger" style="font-size: 25px"></i>
                        </button>
                    </div>
                </div>
    
                
                <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="form-group mb-2">
                            <label for="name">Nama</label>
                            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                            <input type="text" id="name" class="form-control" name="name" value="{{ auth()->user()->name }}">
                        </div>

                        <div class="form-group mb-2">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control" name="username" value="{{ auth()->user()->username }}">
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="unique" value="{{ auth()->user()->unique_kode }}">
                        </div>

                        <div class="col-12 mt-3">
                            <button class="col-lg-12 btn btn-success" type="submit"><i class="fa-solid fa-check"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</div>
  