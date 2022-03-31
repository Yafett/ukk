@extends('layouts.app-admin')

{{-- @include('partials.navbar') --}}


@section('content')

<div class="container justify-content-right">




  <br>


  <table class="table">
	<thead class="thead" style="color : white; background-color: #e39aa7; border-bottom-style: hidden; border-top: hidden;">
	  <tr>
		<th scope="col">Tipe Kamar</th>
		<th scope="col">Jumlah Kamar</th>
		<th scope="col">Aksi</th>
	  </tr>
	</thead>
	<tbody>

		@foreach($kamar as $k)
		<tr>
			<td>{{ $k->tipe_kamar }}</td>
			<td>{{ $k->jumlah_kamar }}</td>

			<td>
				<a href="/admin/dashboard/edit/{{ $k->id_kamar }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Edit</a>
				{{-- <a href="/admin/dashboard/lihat/{{ $k->id_kamar }}" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Lihat</a> --}}
				<a href="/admin/dashboard/hapus/{{ $k->id_kamar }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a>



			</td>
		</tr>
		@endforeach
	</tbody>
  </table>
{{--
  <a href="/admin/dashboard/tambah">
    tambah data kamar
  </a>  --}}

    <div class="d-flex flex-column align-items-end">

		<a href="/admin/dashboard/tambah" type="button" class="btn btn-success btn-circle btn-sm" style="background-color: #e39aa7; border-color: #e39aa7; color : white;">+</a>

    </div>



</div>
@endsection
