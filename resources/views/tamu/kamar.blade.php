<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
    <link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .jumbotron {
            background-image: url('../gambar/hotela.png');
            /* background-color: #f7f7f7; */
            height: 610px;
            text-align: center;

        }

        .list-group-item.active {
            z-index: 1;
            color: #fff;
            margin-left: 5px;
            width: 1100px;
            background-color: #343a40 !important;
            border-bottom-right-radius: 10px 10px;
            margin-top: -10px;
            border-bottom-left-radius: 10px 10px;
            border-top-left-radius: unset;
            border-top-right-radius: unset;
        }

        section {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #sec-1 {
            background-color: rgb(214, 228, 92);
        }

        #sec-2 {
            background-color: aliceblue;
        }

        .scroll-down {
            height: 50px;
            width: 30px;
            border: 2px solid #f7f7f7;
            position: absolute;
            left: 50%;
            bottom: 20px;
            border-radius: 50px;
            cursor: pointer;
        }

        .scroll-down::before,
        .scroll-down::after {
            content: "";
            position: absolute;
            top: 20%;
            left: 50%;
            height: 10px;
            width: 10px;
            transform: translate(-50%, -100%) rotate(45deg);
            border: 2px solid #f7f7f7;
            border-top: transparent;
            border-left: transparent;
            animation: scroll-down 1s ease-in-out infinite;
        }

        .scroll-down::before {
            top: 30%;
            animation-delay: 0.3s;
            /* animation: scroll-down 1s ease-in-out infinite; */
        }

        @keyframes scroll-down {
            0% {
                /* top:20%; */
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            60% {
                opacity: 1;
            }

            100% {
                top: 90%;
                opacity: 0;
            }
        }

        .card {
            flex-direction: row;
            align-items: center;
        }

        .card-title {
            font-weight: bold;
        }

        .card img {
            width: 30%;
            border-top-right-radius: 0;
            border-bottom-left-radius: calc(0.25rem - 1px);
        }

        @media only screen and (max-width: 768px) {
            a {
                display: none;
            }

            .card-body {
                padding: 0.5em 1.2em;
            }

            .card-body .card-text {
                margin: 0;
            }

            .card img {
                width: 50%;
            }
        }

        @media only screen and (max-width: 1200px) {
            .card img {
                width: 40%;
            }
        }

    </style>

    <link href="album.css" rel="stylesheet">
</head>

<body>


    <main role="main">

        <div class="jumbotron">
            <div class="container">
                <h1 class="text-white display-3" style="margin-top: 130px; font-weight : 500">Informasi Kamar</h1>
                <p class="text-white" style="margin-left: 290; width: 530; text-align: justify;">Hotel Tadika Mesra memilik 2 Tipe Kamar, Tipe Superior dan Tipe Deluxe, dimana masing masing tipe kamar memiliki Fasilitas dan Keunggulannnya masing masing.</p>
                {{-- <p><a class="btn btn-lg text-white" style="background-color: #ff6907c7; border-color : none" href="#" role="button">↓</a></p> --}}

            </div>
            <div class="container">
                <a href="#sec-2">
                    <div class="scroll-down"></div>
                </a>
            </div>
        </div>


        <div class="container" id="sec-2"></div>

        <div class="container">

            <div class="display-4 " style="font-weight : 600; margin-top : 100px">Tipe Kamar</div>


            <div class="card" style="margin-top : 5%; border : 1.5px solid; border-color : #3bbcdb;">
                <img src="{{ asset('gambar/superior.jpeg') }}" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title" style="font-size : 24; font-weight : 400">Kamar Superior</h5>
                    <p class="card-text" style="12">
                        Ruangan yang berukuran lebih luas dari kamar hotel pada umumnya, memberikan fasilitas berkualitas standar bagi pemesan.
                    </p>
                    <a href="#" class="btn btn-primary" style="float: right; font-weight : 600; border : 1.5px solid; border-color :#3bbcdb; background-color : white; color : #3bbcdb; margin-top : 40px;">Lihat Fasilitas >> </a>
                </div>
            </div>

            <div class="card" style="margin-top : 5%; margin-bottom : 5%; border : 1.5px solid; border-color : #3bbcdb;">
                <div class="card-body" style="text-align: -webkit-right;">
                    <h5 class="card-title" style="font-size : 24; font-weight : 400">Kamar Deluxe</h5>
                    <p class="card-text" style="12">
                       Kamar yang memiliki ukuran lebih besar dibandingkan dengan kamar Superior, dengan segi interior dan fasilitas yang terkesan lebih mewah.
                    </p>
                    <a href="#" class="btn btn-primary" style="float: left;font-weight : 600; border : 1.5px solid; border-color :#3bbcdb; background-color : white; color : #3bbcdb; margin-top : 40px;">Lihat Fasilitas >> </a>
                </div>
                <img src="{{ asset('gambar/deluxe.jpg') }}" class="card-img-top" />
            </div>

        </div>

        {{-- <img style="margin-left: 50px;" src="{{ asset('gambar/superior.jpeg') }}" width="100" height="100" class="imgfix mb-3" /> --}}


        {{-- <div class="container" style="margin-bottom: 100px; margin-top: 200px;"></div>
        <div class="p-5 bg-dark text-white h-50  text-center" style="border:1px solid; border-color: grey; border-radius: 10px 20px 0 0; background-image: url('../gambar/kamar.png'); background-size: cover; width : 1100px; margin-left : 82px; margin-top : -70px "> --}}
            {{-- <img src=" " class=" text-white h-50 imgfix mb-3" /> --}}

        {{-- </div>
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">

                    <p style="font-size:25px ; margin-bottom : -1px">
                        Fasilitas :

                    </p>
                    <ul>
                        @foreach ($fkamar as $f)
                        <li>
                            {{ $f->nama_fasilitas }}
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <div class="p-5 bg-dark text-white h-50  text-center" style="border:1px solid; border-color: grey; border-radius: 10px 20px 0 0; background-image: url('../gambar/kamar_deluxe.png'); background-size: cover; width : 1100px; margin-left : 82px; margin-top : 50px ">
        </div> --}}


        {{-- <div class="container">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">

                    <p style="font-size:25px ; margin-bottom : -1px">
                        Fasilitas :

                    </p>
                    <ul>
                        @foreach ($fkamar as $f)
                        <li>
                            {{ $f->nama_fasilitas }}
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

        <br> --}}


        <nav class="navbar fixed-top navbar-dark navbar-expand-md me-auto" style="background-color: #3bbcdb">
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
                    <ul class="navbar-nav ms-auto" style="margin-left: 780px">
                        @if (Route::has('login'))
                        @auth
                        {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                        <a href="/home" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Home</a>
                        <a href="/home/kamar" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Kamar</a>
                        <a href="/home/fasilitas" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Fasilitas</a>
                        <a href="/home/check" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Cetak</a>

                        <a style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                        <a href="/home" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Home</a>
                        <a href="/home/kamar" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Kamar</a>
                        <a href="/home/fasilitas" style="color : white; text-decoration : none;" class="ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Fasilitas</a>

                        <a href="{{ route('login') }}" style="color : white; text-decoration : none;" class=" ml-3 text-sm text-gray-700 dark:text-gray-500 underline p-1">Log in</a>

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

    </main>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>

</html>

{{-- @foreach ($fkamar as $f)
    <li class="list-group-item"
        style="border-top-width: 0; margin-top: -7px; width: 1100px; margin-left: -3px;">
        {{ $f->nama_fasilitas }}</li>
@endforeach --}}
