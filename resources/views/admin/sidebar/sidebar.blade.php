<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>

        <a class="navbar-brand mt-5" href="{{ route('dashboard') }}">
            <div class="d-flex justify-content-center">
                <img src="{{ URL::to('library/logo/kiano.png') }}" alt="Company Name" class="img-fluid" width="150">
            </div>
        </a>
    </div>

    <hr class="horizontal dark mt-5 mb-4">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('dashboard')" href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" target="_blank">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Preview Web</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Data</h6>
            </li>


            <li class="nav-item">
                <a class="nav-link  @yield('kategori')" href="{{ route('admin.kategori') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-sort-down-alt text-warning text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Kategori</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @yield('location')" href="{{ route('admin.location') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-geo text-warning text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Wilayah</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Produk</h6>
            </li>


            <li class="nav-item">
                <a class="nav-link @yield('paket')" href="{{route('admin.pakettour')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-cart-flatbed-suitcase text-success text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Paket Tour</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link @yield('produk')" href="{{route('admin.produktour')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-menu-button-wide-fill text-info text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Produk Tour</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @yield('rental')" href="{{route('admin.sewamobil')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-car text-danger text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Sewa Mobil</span>
                </a>
            </li>


            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Konten pages</h6>
            </li>


            <li class="nav-item">
                <a class="nav-link @yield('slider')" href="{{ route('admin.slider') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-images text-dark text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Slider</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @yield('about')" href="{{ route('admin.about') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clone text-warning text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Tentang Kami</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @yield('testimoni')" href="{{ route('admin.testimoni') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-message text-info text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Testimoni</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @yield('patner')" href="{{ route('admin.patner') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-handshake text-secondary text-lg opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 pt-1">Patner Kami</span>
                </a>
            </li>
        </ul>
    </div>

</aside>