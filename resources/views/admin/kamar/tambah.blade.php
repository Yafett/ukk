@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Tambah Kamar</h3>

<a href="admin.dashboard"> Kembali</a>

<form action="/admin/dashboard/tambah" method="post">
    {{ csrf_field() }}

    Tipe Kamar <input type="text" name="tipe_kamar" required="required"> <br/>
    Jumlah Kamar <input type="text" name="jumlah_kamar" required="required"> <br/>
   
    <input type="submit" value="Simpan Data">
</form>

</div>


@endsection