@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Edit Kamar</h3>

<a href="admin.dashboard"> Kembali</a>

@foreach($kamar as $k)
<form action="/admin/dashboard/edit/{{ $k->id_kamar }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $k->id_kamar }}"> <br/>
    Tipe kamar <input type="text" required="required" name="tipe_kamar" value="{{ $k->tipe_kamar }}"> <br/>
    Jumlah Kamar <input type="text" required="required" name="jumlah_kamar" value="{{ $k->jumlah_kamar }}"> <br/>
    
    <input type="submit" value="Simpan Data">
</form>
@endforeach

</div>


@endsection