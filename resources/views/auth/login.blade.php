<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('gambar/fav.jpg') }}">


  <style>
        body {
            background-color: #f7f7f7;
        }

    </style>

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90" style="background-color : #f7f7f7">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- <span class="login100-form-title p-b-51" style="font-family: sans-serif">
                        {{ __('Login') }}
                    </span> --}}


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">

                        {{-- <input id="email" type="email"
                        class="m-b-16 input100 form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                        <input style="font-family: sans-serif; font-size : 14px;" id="email" value="{{ old('email') }}" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required autocomplete="email" autofocus>
                        {{-- <span class="focus-input100"></span> --}}
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">

                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password"> --}}

                        <input style="font-family: sans-serif;  font-size : 14px;" id="password" value="{{ old('password') }}" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password" autofocus>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        {{-- <input class="input100" type="password" name="pass" placeholder="Password"> --}}
                        {{-- <span class="focus-input100"></span> --}}
                    </div>
                    <div class="container-login100-form-btn m-t-17" style="place-content: center; font-size : 12px;">
                        <button type="submit" class="login100-form-btn" style="font-family: sans-serif; background-color : #747778">
                            {{ __('Login') }}
                        </button>
                        <span>belum punya akun?

                            <a style='color : rgb(219, 79, 79)' href="/register">daftar dulu</a>
                        </span>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



</body>

</html>
