<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


    <!-- Styles -->
    <link href="{{ asset('css/check.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }

    </style>
</head>

<body>

    <div class="main">
        <div class="two" style="border-color: #32c671;">
            {{-- <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i
                    class="mdi mdi-dots-horizontal dot"></i></div> --}}
            <div class="px-3">
                <img src="gambar/check.png" width="100" height="100" class="imgfix" />
            </div>
            <p class="text-success"
                style="font-size : 18px; text-align : center; font-family: sans-serif; color : #32c671; font-weight : 600; margin-top : -2px; margin-bottom: 20px;">
                Pemesanan
                Berhasil</p>


            <div class="container p-3" style="font-family: sans-serif;">

                <h2 class="name">Nama Pemesan</h2>
                <span class="quote2 pl-2">Pak Agung</span>

                <h2 class="name">No Telepon</h2>
                <span class="quote2 pl-2">0821 1212 2134</span>

                <h2 class="name">Tipe Kamar</h2>
                <span class="quote2 pl-2">Tipe Superior</span>

                <h2 class="name">Tanggal</h2>
                <span class="quote2 pl-2">In : 12-02-2022</span><br>
                <span class="quote2 pl-2">Out : 12-02-2022</span>
            </div>

            <div class="col">
                <button class="button button4" href="#" role="button" aria-pressed="true">Kembali</button>
                <button class="buttonk button4"role="button" aria-pressed="true">Cetak</button>

            </div>
        </div>

    </div>

    </main>

</body>

</html>
