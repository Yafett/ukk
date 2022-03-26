@extends('layouts.app-admin')

@section('content')
    <div class="container">
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


                        Tipe Kamar <select class="form-control" id="tipe_kamar" name="tipe_kamar">
                            @foreach ($fkamar as $k)
                                <option value="{{ $k->tipe_kamar }}">{{ $k->tipe_kamar }}</option>
                            @endforeach

                        </select>
                        <br />

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
