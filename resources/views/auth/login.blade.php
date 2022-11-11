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

<body>
    
    <section class="ftco-section" style="background: url('assets/apps.assets/content/about.png'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
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

                        <form method="POST" action="{{ route('getlogin') }}">
                            @csrf
                            

                            <div class="form-group mb-3">
                                <label for="username">{{ __('Username') }}</label>
                                <input type="text" name="username" id="username" placeholder="Username"
                                class="form-control @error('username') border-danger @enderror" value="{{ old('email') }}">
            
                                @error('username')
                                    <div class="text-danger" style="font-size: 12px;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror


                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                class="form-control @error('password') border-danger @enderror" value="">
            
                                @error('password')
                                    <div class="text-danger" style="font-size: 12px;">
                                        {{ $message }}
                                    </div>
                                @enderror
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