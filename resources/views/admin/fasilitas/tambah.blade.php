@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Tambah Fasilitas Umum</h3>

<a href="admin.dashboard"> Kembali</a>

<form action="/admin/fasilitas/tambah" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}


    <br/>
    
    Nama Fasilitas <input type="text" name="nama_fasilitas" required="required"> <br/>

    Keterangan <input type="text" name="keterangan" required="required"> <br/>
   
    
        <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">

    <input type="submit" value="Simpan Data">
</form>

</div>


@endsection