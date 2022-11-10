<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('assets/login.assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{URL::to('assets/login.assets/assets/images/logo/logo.png')}}" type="image/x-icon">


</head>

<body style="background: url('assets/apps.assets/content/about.png'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
    
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center py-5">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">


                        <div class="d-flex mb-4">
                            <img src="{{URL::to('library/logo/kiano.png')}}" alt="Company Name"
                                class="navbar-brand-img h-100" width="150">
                            {{-- <div style="line-height: 20px;" class="ml-2 pt-1">
                                <span class="ms-1 text-secondary mb-0" style="font-size: 18px;">Kiano Travel</span><br>
                                <span class="ms-1" style="font-size: 13px; font-weight: 400; color: #9AA2A3;">Tagline goes here</span>
                            </div> --}}
                        </div>

                        <form method="POST" action="{{ route('getlogin') }}" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="username">{{ __('Username') }}</label>
                                <input type="text"
                                    class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} boxed"
                                    name="username" id="username" value="{{ old('username') }}" required autofocus autocomplete="off">
                            </div>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} boxed"
                                        name="password" id="password" required autocomplete="off">
                                    <div class="input-group-append">
                                        <span class="input-group-text" onclick="myFunction()">
                                            <i class="fa fa-eye" id="openeye" style="display: none; color: gray;"></i>
                                            <i class="fa fa-eye-slash" id="slasheye"
                                                style="enable-background:new 0 0 98.48 98.481; color: gray;"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>



                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif

                            <div class="form-group" style="margin-bottom: 0px; float:left;">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgetpwd">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3">Login</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function myFunction() {
            var x = document.getElementById("password");
            var y = document.getElementById("openeye");
            var z = document.getElementById("slasheye");
            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>

    {{-- @include('sweetalert::alert') --}}
    <script src="{{URL::to('assets/login.assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets/login.assets/js/popper.js')}}"></script>
    <script src="{{URL::to('assets/login.assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/login.assets/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>