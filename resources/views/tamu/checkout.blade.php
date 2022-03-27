@extends('layouts.app-tamu')

{{-- @include('partials.navbar') --}}



@section('content')
    <div class="container justify-content-right">

        <br>

        <div class="container">




            <a href="/tamu/cetak" target="_blank" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Cetak</a>


        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Tamu</th>
                    <th scope="col">Tanggal Check In</th>
                    <th scope="col">Tanggal Check Out</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($reservasi as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection