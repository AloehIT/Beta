<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kiano Travel</title>

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">

        <!-- Global Style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

        <!-- Styles -->
        <link href="{{URL::to('assets/apps.assets/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/search.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/style.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/imageupload.css') }}">
  		<link rel="stylesheet" href="{{ URL::to('assets/apps.assets/css/imageproduk.css') }}">
        <link rel="shortcut icon" href="{{URL::to('assets/apps.assets/images/logo-footer.png')}}" height="30" >
        <link href="{{URL::to('assets/admin.assets/css/img.css')}}" rel="stylesheet" />
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

		<style>
			.preloader {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 9999;
				background-color: #fff;
			}
			.preloader .loading {
				position: absolute;
				left: 50%;
				top: 50%;
				transform: translate(-50%,-50%);
				font: 14px arial;
			}
		</style>


    </head>


    <body class="slider-collapse">
		<div class="preloader">
			<div class="loading">
				<img src="{{ URL::to('assets/apps.assets/content/loader.gif') }}" alt="">
			</div>
		</div>

		<div id="site-content">
			<div class='back-to-top btn btn-success'>
				<a href="" class="text-white px-4" style="text-decoration: none;"><i class="bi bi-whatsapp"></i> &NonBreakingSpace; {{ __('label.wa') }}</a>
			</div>
			<!-- START:: Nabar menu -->
            @yield('navbar')
            @yield('subnavbar')
			<!-- END:: Nabar menu -->


			<!-- START:: Content -->
			@yield('content')
			<!-- END:: Content -->

			<!-- START:: Content -->
			@include('layouts.userslayouts.footer')
			<!-- END:: Content -->

		</div> 
        <!-- #site-content -->



		<script src="{{ URL::to('assets/apps.assets/js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/min/plugins-min.js')}}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/min/app-min.js')}}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/popper.min.js') }}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ URL::to('assets/apps.assets/js/main.js') }}"></script>
        <script src="{{URL::to('assets/apps.assets/js/ie-support/html5.js')}}"></script>
		<script src="{{URL::to('assets/apps.assets/js/ie-support/respond.js')}}"></script>


		<script>
			var backToTop = document.querySelector('.back-to-top');

			window.addEventListener('scroll', () => {
			if ( this.scrollY >= 0 ) {
				backToTop.classList.add('show');

			} else {
				backToTop.classList.remove('show');
			}
			});

			$(document).ready(function(){
				$(".preloader").fadeOut();
			})

		</script>
		@include('sweetalert::alert')
	</body>
</html>
