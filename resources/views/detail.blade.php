@extends('layoutuser')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    {{ $pesan->id }}
    {{ $pesan->ASAL_INSTANSI }}
    {{ $pesan->JUDUL }}
    {{ $pesan->JENIS_KONTEN }}
    {{ $pesan->DESKRIPSI }}
    {{ $pesan->MEDIA }}
    {{ $pesan->TGL_UPLOAD }}
    {{ $pesan->STATUS }}
</div>
@endsection