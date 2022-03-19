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
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{ $f->image }}">

    <input type="submit" value="Simpan Data">
</form>
@endforeach

</div>


@endsection