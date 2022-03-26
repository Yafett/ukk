@extends('layouts.app-admin')

{{-- @include('partials.navbar') --}}



@section('content')

<div class="container justify-content-right">






  <br>


  <table class="table">
	<thead class="thead-dark">
	  <tr>
		<th scope="col">Tipe Kamar</th>
		<th scope="col">Nama Fasilitas</th>
		<th scope="col">Aksi</th>
	  </tr>
	</thead>
	<tbody>

		@foreach($fkamar as $k)

		<tr>
			<td>{{ $k->tipe_kamar }}</td>
			<td>{{ $k->nama_fasilitas }}</td>

			<td>
				<a href="/admin/fkamar/edit/{{ $k->id_fkamar }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Edit</a>


				<a href="/admin/fkamar/hapus/{{ $k->id_fkamar }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a>


			</td>
		</tr>
		@endforeach
	</tbody>
  </table>

   <div class="d-flex flex-column align-items-end">

		<a href="/admin/fkamar/tambah" type="button" class="btn btn-success btn-circle btn-sm">+</a>

    </div>



</div>
@endsection
