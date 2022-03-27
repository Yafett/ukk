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
                <h3>Edit Fasilitas Umum</h3>
                @foreach ($fasilitas as $f)
                    <div class="card p-3" style="background-color: white; width : 380px;">
                        <form action="/admin/fasilitas/edit/{{ $f->id_fasilitas }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            Nama Fasilitas <input class="form-control" type="text" name="nama_fasilitas"
                                required="required" value="{{ $f->nama_fasilitas }}"> <br />

                            Keterangan <input class="form-control" type="text" name="keterangan" required="required"
                                value="{{ $f->keterangan }}"> <br />
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">

                            <br>


                            <div class="row">
                                current image : <br>
                                <img src="{{ asset("gambar/$f->image") }}" class="img-thumbnail" />

                                <small>{{ $f->image }}</small>

                            </div>

                            <div class="col mt-3">
                                <a href="{{ route('admin.fasilitas.dashboard') }}"> Kembali</a>
                                <input class="btn btn-success ml-3" type="submit" value="Simpan Data">
                            </div>

                        </form>
                    </div>

            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
    @endforeach
@endsection
