<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('assets/admin.assets/icon/logo.png')}}">
  <link rel="icon" type="image/png" href="{{URL::to('assets/admin.assets/icon/logo.png')}}"> --}}
  <title>
    @yield('title') - Admin Kiano Travel
  </title>

  <!----CSS:Start----->  
  @include('layouts.adminlayouts.css')
  <!----CSS:END------->  
</head>


<body class="g-sidenav-show  bg-gray-100">
  <div class="preloader">
    <div class="loading">
        <img src="{{ URL::to('assets/admin.assets/icon/load.gif') }}" alt="">
    </div>
  </div>    
  


  @yield('content')


    <!----JS:Start----->  
    @include('layouts.adminlayouts.js')
    <!----JS:END------->  
</body>

@include('sweetalert::alert')
</html>