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
                <h3 class="display-7">Edit Data Kamar</h3>

                @foreach ($kamar as $k)

                <div class="card p-3" style="background-color: white; width : 380px;">
                    <form action="/admin/dashboard/edit/{{ $k->id_kamar }}" method="post">
                        {{ csrf_field() }}

                        Tipe Kamar
                        <select name="tipe_kamar" id="tipe_kamar" class="form-control mb-3">
                            <option selected class="form-select form-check disabled text-muted" aria-label="disabled select example" value="{{ $k->tipe_kamar }}">{{ $k->tipe_kamar }}</option>
                            {{-- <option value="Superior">Superior</option>
                            <option value="Deluxe">Deluxe</option> --}}
                        </select>
                         Jumlah Kamar <input value="{{ $k->jumlah_kamar }}" class="form-control" type="number" min="0" name="jumlah_kamar" required="required">
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


@endforeach
@endsection
