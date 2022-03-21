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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                            @if (Route::has('login'))
                                    @auth
                                        {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                                        <a class="button" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
                
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                
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
        
        <main class="p-4">
            <form action="{{ route('home.tes') }}" id="myForm" method="POST" DefaultButton="pesan">
                @csrf
                    <div class="card-body">
                        @if (session('success'))
                             <div class="alert alert-success" role="alert">
                                {{ session('success') }}
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

                <div class="row g-1">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value="">
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
                            <input requ type="number" name="jumlah_kamar" class="form-control" id="jumlah_kamar" value="">
                            <label for="floatingInputGrid">Jumlah Kamar</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            {{-- <a href="#" class="btn btn-primary btn-lg active" onclick="IsEmpty()" role="button" aria-pressed="true">Primary link</a> --}}

                            <button class="btn btn-primary" onclick="isEmpty()" type="submit">Kirim</button>

                        </div>
                    </div>
                </div> 
            </div>
            
    

            <div class="collapse" id="myCollapsible">
                <div class="form-group row py-2 tmbhdikit">
                    <label for="pemesan" class="col-sm-2 col-form-label">Nama Pemesan</label>
                    <div class="col-sm-10">
                        <input required type="text" name="pemesan" class="form-control" id="pemesan" placeholder="Nama Pemesan" value="">
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
                        <input type="text" name="notelp" class="form-control" id="notelp" placeholder="Nomor Telepon">
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
                            <option selected class="form-select form-check disabled text-muted  " aria-label="disabled select example" disabled>Pilih salah satu tipe kamar</option>
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
                <button class="btn-primary">Pesan</button>
            </form>
{{-- 
            <div class="collapse" id="myCollapsible">
              <div class="card card-body">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit...
              </div> --}}
            </div>
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

