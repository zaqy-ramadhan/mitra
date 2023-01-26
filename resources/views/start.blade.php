@extends('layoutuser')
@section('content')
@auth

    <div class="container mt-3">
        <div class="row p-3">
            <div class="col" style="max-width: 85px">
                <img src="assets/ava-icon-dark.png" alt="" style="border-radius:75px; height:75px; width:75px; border: solid #FCE2DB 2px;">
            </div>
            <div class="col">
                <h2 class="mt-3 mb-0" style="color: #432C7A; font-size:25px">{{ Auth::user()->name }}</h2>
                <h3 style="color: #80489C; font-size:15px; font-weight:light    ;">{{ Auth::user()->email }}</h3>
            </div>
        </div>
    </div>
    
    <div class="container p-4">
        <h1 style="font-weight:bold; color:#432C7A">Selamat Datang !</h1>
        <a href="" data-bs-toggle="modal" data-bs-target="#pesan" style="text-decoration: none;">
            <div class="hvr-grow shadow mt-3 d-flex align-items-center" style="height: 250px; border-radius:25px; background-image: linear-gradient(to right, rgb(68, 45, 124), rgba(255, 255, 255, 0.5)), url('assets/bg3.png'); background-size: cover;">
                <div class="p-4" style="max-width:80%">
                    <h1 style="font-weight: inherit; color:#FCE2DB; font-size:35px;">Buat Pesanan Baru</h1>
                </div>
            </div>
        </a>
    </div>

    <div class="container px-4 py-2 mt-2">
        <h1 style="font-weight:inherit; color:#432C7A; font-size:x-large">Pesanan Terbaru</h1>
        <div class="row mt-4 px-2">
            @foreach ($pesan as $isi)
            <div class="hvr-grow col p-1">
                <div class="card shadow rounded p-2 text-center" style="height: 150px; border:none">
                    <div class="card-body p-1" style="min-height: 55px">
                        <h1 style="font-size: small">{{ $isi->JUDUL }}</h1>
                    </div>
                    <div class="card-body">
                        @if($isi->STATUS = 'dalam antrian')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Example with label" style="width: 25%; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @elseif($isi->STATUS = 'proses pengerjaan')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%; background-color: #432C7A; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @elseif($isi->STATUS = 'proses qc')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%; background-color: #432C7A; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @elseif($isi->STATUS = 'selesai')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 100%; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endif
                    </div>
                    <span style="font-size:x-small;">Status : {{ $isi->STATUS }}</span>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="/pemesanan" style="color: #80489C"><p>selengkapnya ></p></a>
        </div>
    </div>

    @else

    <div class="container-fluid d-flex align-items-center justify-content-center" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/bg.jpg'); min-height:50vh; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container text-center" style="color:#fff">
            <h1>Selamat Datang di Mitra</h1>
            <p>Mitra adalah sistem pemesanan konten, dengan Mitra pemesanan dan pelacakan konten menjadi lebih mudah</p>
            <a data-bs-toggle="modal" data-bs-target="#pesan" class="btn shadow hvr-grow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px">Buat Pesanan</a>
        </div>
    </div>

    <div class="container text-center mt-5">
        <h1 style="font-weight:bolder; background: -webkit-linear-gradient(#432C7A, #80489C);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;">BerMitra Dengan Kami Dalam 3 Langkah</h1>
        <div class="row mt-5" style="font-size:medium">
            <div class="col hvr-grow">
                <img src="assets/step-1.png" alt="" style="height: 50px">
                <p>Membuka web/aplikasi Mitra</p>
            </div>
            <div class="col hvr-grow">
                <img src="assets/step-2.png" alt="" style="height: 50px">
                <p>Membuat pemesanan konten</p>
            </div>
            <div class="col hvr-grow">
                <img src="assets/step-3.png" alt="" style="height: 50px">
                <p>Pemesanan segera diproses</p>
            </div>
        </div>
    </div>

    <div class="container mt-3 text-center">
        <a href="/login" class="btn shadow hvr-grow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px">Daftar Sekarang</a>
    </div>
    @endauth
@endsection