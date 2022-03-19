@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Tambah Fasilitas Kamar</h3>

<a href="admin.dashboard"> Kembali</a>

@foreach( $fkamar as $k)
<form action="/admin/fkamar/edit/{{ $k->id_fkamar }}" method="post">
    {{ csrf_field() }}
   
       <select class="form-control" id="tipe_kamar" name="tipe_kamar">
@foreach( $fkamar as $k)
      <option value="{{ $k->tipe_kamar }}">{{ $k->tipe_kamar }}</option>
@endforeach
      
    </select>
    <br/>
    
    Nama Fasilitas <input type="text" name="nama_fasilitas" required="required" value="{{ $k->nama_fasilitas }}"> <br/>
   
    <input type="submit" value="Simpan Data">

</form>
@endforeach

</div>


@endsection