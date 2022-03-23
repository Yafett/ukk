@extends('layouts.app-admin')

@section('content')

<div class="container">

    <h3>Tambah Kamar</h3>

    <a href="{{ route('admin.dashboard') }}"> Kembali</a>

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
<form action="/admin/dashboard/tambah" method="post">
    {{ csrf_field() }}

    Tipe Kamar <input type="text" name="tipe_kamar" required="required"> <br/>
    Jumlah Kamar <input type="text" name="jumlah_kamar" required="required"> <br/>
   
    <input type="submit" value="Simpan Data">
</form>

</div>


@endsection