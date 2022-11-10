@section('subnavbar')
    @php
        $count = App\Models\keranjang::where('session', session('id_cart'))->count();
        
    @endphp
    <header class="site-header wow fadeInDown">
        <div class="bg-white">
            <div class="header-content container">
                <div class="branding">
                    <div class="d-flex">
                        <div>
                            <img src="{{ URL::to('library/logo/kiano.png') }}" alt="Company Name" class="img-fluid"
                                width="100">
                        </div>
                        <div class="mx-0 d-none d-lg-block d-md-block">
                            <h1 class="site-title"><a href="index.html">Kiano Wisata Tour</a></h1>
                            @if(app()->getLocale()=='id')
                            <small class="site-description">Jelajahi Negeri Bersama Kami</small>
                            @elseif(app()->getLocale()=='en')
                            <small class="site-description">Explore the Country With Us</small>
                            @endif
                        </div>
                    </div>
                </div>

                <nav class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ route('home') }}">{{ __('menu.home') }}</a></li>
                        <li class="menu-item"><a href="{{ route('tour') }}">{{ __('menu.tour_package') }}</a></li>
                        <li class="menu-item"><a href="{{ route('produk') }}">{{ __('menu.tour_product') }}</a></li>
                        <li class="menu-item"><a href="{{ route('mobil') }}">{{ __('menu.rent_car') }}</a></li>
                        <li class="menu-item"><a href="{{ route('testimoni') }}">{{ __('menu.testimonial') }}</a></li>
                        <li class="menu-item"><a href="{{ route('about') }}">{{ __('menu.about_us') }}</a></li>

                    </ul>
                </nav>
                <div class="social-links">
                    <a href="{{ route('keranjang') }}" class="facebook" style="position: relative"><i
                            class="fa fa-shopping-cart"></i>
                        <div
                            style="position: absolute;top:-10px;right:-10px;border-radius:1000px;background-color:red;color:white;width:25px;height:25px;">
                            {{ $count }}
                        </div>
                    </a>
                </div>
            </div>
        </div>



        <div class="breadcrumbs">
            <div class="container">
                <nav class="breadcrumbs d-flex justify-content-between">
                    <div class="text-start">
                        <a>@yield('main')</a> &rarr;
                        
                        @if(app()->getLocale()=='id')
                        <span>@yield('subt') @yield('judul')</span>
                        @elseif(app()->getLocale()=='en')
                        <span>@yield('subt') @yield('title')</span>
                        @endif
                    </div>

                    <li class="nav-item dropdown text-end dropleft">
                        <a class="nav-link dropdown-toggle dropdown-toggle-split" type="button" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ app()->getLocale() == null ? 'en' : app()->getLocale() }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url()->current() }}?lang=id">ID</a></li>
                            <li><a class="dropdown-item" href="{{ url()->current() }}?lang=en">EN</a></li>
                        </ul>
                    </li>
                </nav>
            </div>
        </div>

    </header>
@endsection