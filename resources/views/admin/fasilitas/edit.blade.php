@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Edit Fasilitas Umum</h3>

<a href="admin.dashboard"> Kembali</a>

@foreach($fasilitas as $f)
<form action="/admin/fasilitas/edit/{{ $f->id_fasilitas }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}


    <br/>

    Nama Fasilitas <input type="text" name="nama_fasilitas" required="required" value="{{ $f->nama_fasilitas }}"> <br/>

    Keterangan <input type="text" name="keterangan" required="required" value="{{ $f->keterangan }}"> <br/>


        <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" enctype="multipart/form-data"  name="image" value="{{ asset("gambar/$f->image") }}">

    <img src= "{{ asset("gambar/$f->image") }}" style="width:100;height:100px"/>

    <input type="submit" value="Simpan Data">
</form>
@endforeach

</div>


@endsection
