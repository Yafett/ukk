@extends('layouts.app-admin')


@section('content')

    <div class="container">



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

        <div class="container">
            <div class="row">
              <div class="col-sm">
              </div>
              <div class="col-sm">
                  <h3 class="display-7">Tambah Kamar</h3>

            <div class="card p-3" style="background-color: white; width : 380px;">
                <form action="/admin/dashboard/tambah" method="post">
                    {{ csrf_field() }}

                    Tipe Kamar <input class="form-control" type="text" name="tipe_kamar" required="required"> <br />
                    Jumlah Kamar <input class="form-control" type="number" min="0" name="jumlah_kamar" required="required">
                    <br />
                    <div class="col">
                        <a href="{{ route('admin.dashboard') }}"> Kembali</a>
                        <input class="btn btn-success ml-3" type="submit" value="Simpan Data">
                    </div>
                </form>

            </div>
              </div>
              <div class="col-sm">
              </div>
            </div>
          </div>
        <div class="row justify-content-center">



        </div>

    </div>


@endsection
