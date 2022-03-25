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
    @foreach ($reservasi as $r)
        
    
    <div class="main">
        <div class="two" style="border-color: #32c671;">
            {{-- <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i
                class="mdi mdi-dots-horizontal dot"></i></div> --}}
                <div class="px-3">
                    <img src="{{ asset('gambar/check.png') }}" width="100" height="100" class="imgfix mb-3" />
                </div>
                <p class="text-success"
                style="font-size : 18px; text-align : center; font-family: sans-serif; color : #32c671; font-weight : 600; margin-top : -2px; margin-bottom: 20px;">
                Pemesanan
                Berhasil</p>
                
    
                
                <div class="container p-3" style="font-family: sans-serif;">
                    
                    <h2 class="name">Nama Pemesan</h2>
                    <span class="quote2 pl-2">{{ $r->nama_pemesan }}</span>
                    
                    <h2 class="name">No Telepon</h2>
                    <span class="quote2 pl-2">{{ $r->no_telp }}</span>
                    
                    <h2 class="name">Tipe Kamar</h2>
                    <span class="quote2 pl-2">{{ $r->tipe_kamar }}</span>
                    
                    <h2 class="name">Tanggal</h2>
                    <span class="quote2 pl-2">In : {{ $r->tgl_checkin }}</span><br>
                    <span class="quote2 pl-2">Out : {{ $r->tgl_checkout }}</span>
                </div>
                
                <div class="col">
                    <button class="button button4" href="#" role="button" aria-pressed="true">Kembali</button>
                    <button class="buttonk button4"role="button" aria-pressed="true">Cetak</button>
                    
                </div>
            </div>
            
        </div>
        
        
    </main>
    @endforeach
    
</body>

</html>
