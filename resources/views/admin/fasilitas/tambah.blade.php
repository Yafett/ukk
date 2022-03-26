@extends('layouts.app-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <h3>Tambah Fasilitas Umum</h3>

            <div class="card p-3" style="background-color: white; width : 380px;">
                <form action="/admin/fasilitas/tambah" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                        Nama Fasilitas <input class="form-control" type="text" name="nama_fasilitas" required="required">
                        <br />

                        Keterangan <input class="form-control" type="text" name="keterangan" required="required"> <br />


                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">

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
@endsection
