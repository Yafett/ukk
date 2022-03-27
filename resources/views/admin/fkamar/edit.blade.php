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

    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <h3>Edit Fasilitas Kamar</h3>
            <div class="card p-3" style="background-color: white; width : 380px;">

                @foreach ($fkamar as $f)

                @endforeach
                <form action="/admin/fkamar/edit/{{ $f->id_fkamar }}" method="post">
                    {{ csrf_field() }}


                    Tipe Kamar
                    @if ($f->tipe_kamar == 'Superior')
                    <select name="tipe_kamar" id="tipe_kamar" class="form-control mb-3">
                        <option selected class="form-select form-check" aria-label="disabled select example" >Superior</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>
                        @endif

                        @if ($f->tipe_kamar == 'Deluxe')
                    <select name="tipe_kamar" id="tipe_kamar" class="form-control mb-3">
                        <option selected class="form-select form-check" aria-label="disabled select example" >Deluxe</option>
                        <option value="Superior">Superior</option>
                    </select>
                        @endif

                    {{-- <br /> --}}

                    Nama Fasilitas <input value="{{ $f->nama_fasilitas }}" class="form-control" type="text" name="nama_fasilitas" required="required">
                    <br />

                    <div class="col">

                        <a href="{{ route('admin.fkamar.dashboard') }}"> Kembali</a>
                        <input class="btn btn-success ml-3" type="submit" value="Simpan Data">
                    </div>
                </form>


            </div>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>
@endsection
