@extends('layouts.app-admin')

@section('content')

<div class="container">



<a href="{{ route('admin.dashboard') }}"> Kembali</a>

{{-- {{  $kamar }} --}}


@foreach ($kamar as $k)
<h2>

    {{ $k->tipe_kamar   }}
    
</h2>
@endforeach

Fasilitas :
<ul>
            {{-- @foreach ($fasilitas as $f)
            <li>{{ $f->nama_fasilitas }}</li>
            @endforeach --}}

            {{ $fasilitas->nama_fasilitas }}
        </ul>

</div>


@endsection