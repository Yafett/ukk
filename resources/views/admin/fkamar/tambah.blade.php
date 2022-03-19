@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Tambah Fasilitas Kamar</h3>

<a href="admin.dashboard"> Kembali</a>

<form action="/admin/fkamar" method="post">
    {{ csrf_field() }}

    <!--Tipe Kamar <input type="text" name="tipe_kamar" required="required">  -->
       <select class="form-control" id="tipe_kamar" name="tipe_kamar">
@foreach( $kamar as $k)
      <option value="{{ $k->tipe_kamar }}">{{ $k->tipe_kamar }}</option>
@endforeach
      
    </select>
    <br/>
    
    Nama Fasilitas <input type="text" name="nama_fasilitas" required="required"> <br/>
   
    <input type="submit" value="Simpan Data">
</form>

</div>


@endsection