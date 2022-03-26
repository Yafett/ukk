<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <style>
        .jumbotron {
            background-image: url('gambar/hotelc.png');
            background-size: cover;

        }

        .navbar {
            height: 45px;
        }

        body {
            background-color: #f7f7f7;
        }

        .form-control1 {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            background-color: #f8fafc;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }


        }

    </style>
</head>
<body>

    @if (Route::has('login'))
    @auth

    <main>
        @endauth
        @endif

        {{-- Jumbotron --}}
        <div class="jumbotron" style="height: 92.5vh; margin-bottom : 0;">
            <h1 class="display-4 text-dark" style="margin-top : 100px;">Tadika Mesra</h1>
            <p class="lead">Hotel sing nggawa rasa seneng kanggo sampeyan, sing pengin nginep ing kene.</p>
            {{-- <hr class="my-4"> --}}
            {{-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> --}}

            @if (Route::has('login'))
            @auth
            <div class="d-flex" style="margin-left: -20px; margin-top: -20px;">
                <form style="margin-left: 20px;" action="{{ route('reservasi.store') }}" id="myForm" method="POST" DefaultButton="pesan">
                    @csrf
                    @if (session('success'))
                    <div class="row">
                        <div class="card-body">
                            <div class="alert alert-success" role="alert" style="margin-left: 15px;width: 690px;">
                                Data Berhasil di Input
                                <a class="bi bi-printer-fill bi-2x" style="color: #155724; " href="/tamu/check"></a>
                                {{-- <a class="btn btn-lg" href="/login" role="button" style="color: #f7f7f7; background-color : #747778">cetak</a> --}}
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif


                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="row g-1 ml-2" style="margin-top: 30px">
                            <div class="col-md" style="margin-left: -20px">
                                <div class="form-floating">
                                    <input required type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value="">
                                    <label for="floatingInputGrid">Tanggal Check In</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input required type="date" name="tgl_checkout" class="form-control" id="tgl_checkout" value="">
                                    <label for="floatingInputGrid">Tanggal Check Out</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input required type="number" min="0" name="jumlah_kamar" class="form-control" id="jumlah_kamar" value="">
                                    <label for="floatingInputGrid">Jumlah Kamar</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <button class="btn" onclick="isEmpty()" type="submit" style="height: 58px;color:#f7f7f7; background-color:#7b7b76">Kirim</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collapse ml-4" id="myCollapsible">
                        <div class="form-group row tmbhdikit">'
                            <div class="display-6 mt-3 mb-4">
                                Form Pemesan
                            </div>
                            <label for="pemesan" class="col-sm-2 col-form-label">Nama Pemesan</label>
                            <div class="col-sm-10">
                                <input required type="text" name="pemesan" class="input-group form-control" id="pemesan" placeholder="Nama Pemesan" value="">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" value="">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="notelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" name="notelp" class="form-control" id="notelp" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="tamu" class="col-sm-2 col-form-label">Nama Tamu</label>
                            <div class="col-sm-10">
                                <input type="text" name="tamu" class="form-control" id="tamu" placeholder="Nama Tamu">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="tipe_kamar" class="col-sm-2 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <select name="tipe_kamar" id="tipe_kamar" class="form-control">
                                    <option selected class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Pilih salah satu tipe kamar</option>
                                    <option value="superior">Superior</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="form-group row py-2">
                                <div class="col-sm-10 offset-md-2 mt-2">
                                    <button type="submit" id="pesan" class="btn btn-lg btn btn-primary panjang mr-12">Pesan</button>
                                    <input type="button" onclick="resetForm()" class="btn btn-secondary btn-lg" value="Reset">
                                </div>
                            </div> --}}
                        <button class="btn mb-5" style="color: #f7f7f7; background-color : #747778">Konfirmasi Pemesanan</button>
                </form>
            </div>
            @else
            <a class="btn btn-lg" href="/login" role="button" style="color: #f7f7f7; background-color : #747778">Pesan Saiki</a>

            @endauth
            @endif

        </div>

        <nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-md">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                Tadika Mesra
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                        @auth
                        {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                        <a href="/home" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Home</a>
                        <a href="/home/kamar" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Kamar</a>
                        <a href="/home/fasilitas" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Fasilitas</a>

                        <a style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                        <a href="/home" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Home</a>
                        <a href="/home/kamar" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Kamar</a>
                        <a href="/home/fasilitas" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Fasilitas</a>

                        <a href="{{ route('login') }}" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Log in</a>

                        {{-- @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
                        @endauth
                </div>
                @endif
                </ul>
            </div>
            </div>
        </nav>



        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <script>
            $('.datepicker').datepicker();

            function isEmpty() {

                if (document.getElementById('jumlah_kamar').value.length > 0) {

                    if (document.getElementById('tgl_checkin').value.length > 0) {

                        if (document.getElementById('tgl_checkout').value.length > 0) {

                            $('#myCollapsible').collapse('show');

                        }

                    }

                }
            }

        </script>

    </main>


</body>
</html>
