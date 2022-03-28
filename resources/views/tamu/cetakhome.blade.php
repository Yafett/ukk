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

    <div class="container">

        <br>

        <div class="container" style="margin-top: 5%">
            <a href="/tamu/cetak" target="_blank" class="btn btn-success btn-sm active" role="button" aria-pressed="true">cetak semua</a>
            
        

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Tanggal Check In</th>
                        <th scope="col">Tanggal Check Out</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($reservasi as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>
                            
                            <a target="_blank" href="/home/check/{{ $r->id_reservasi }} class="btn btn-info btn-sm active" role="button" aria-pressed="true">cetak</a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <nav class="navbar fixed-top navbar-dark navbar-expand-md" style="background-color: #117a8b">
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
                        <a href="/home/check" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Cetak</a>

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
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Register</a>
                        @endif

                        {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
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
