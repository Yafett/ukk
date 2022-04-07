<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
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
    <style>
        body {
            background-image : url("gambar/reg.jpg");
            background-size: cover;
        }

    </style>

</head>

<body>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90" style="background-color : transparent">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                            <input style="font-family: sans-serif; font-size : 14px;" id="name" value="{{ old('name') }}" class="input100 @error('name') is-invalid @enderror" type="name" name="name" placeholder="name" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        {{-- <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                            <input style="font-family: sans-serif; font-size : 14px;" id="email" value="{{ old('email') }}" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                            <input style="font-family: sans-serif; font-size : 14px;" id="password" value="{{ old('password') }}" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="password" required autocomplete="password" autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
{{--
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                            <input style="font-family: sans-serif; font-size : 14px;" id="password-confirm" class="input100 @error('email') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Email Confirmation" required  autocomplete="new-password">

                            @error('password-confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        {{-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}

                        <div class="container-login100-form-btn m-t-17" style="place-content: center; font-size : 12px;">
                            <button type="submit" class="login100-form-btn" stylefont-family: sans-serif; background-color : #00a3e8">
                                {{ __('Register') }}
                            </button>
                            <span class="">sudah punya akun?

                                <a style='color : rgb(255, 255, 255)' href="/login">login</a>
                            </span>
                        </div>

                    </form>




</body>

</html>
