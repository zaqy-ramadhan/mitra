@extends('layoutuser')
@section('content')
<div class="container" style="min-height: 60vh">
    <div class="row d-flex justify-content-center p-4">
        @foreach($pesan->where('id_user', auth::user()->id) as $isi)
        {{-- <div class=""> --}}
            <div class="card m-2 shadow rounded hvr-grow p-2 text-center rounded" style="border: none; height:200px; width:200px">
                <div class="card-head p-1">
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
                    <span style="font-size:x-small;">Status : {{ $isi->STATUS }}</span>
                </div>
                <div class="card-body">
                    <a href="detail/{{ $isi->id }}"><button class="btn shadow hvr-grow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px;">Detail</button></a>
                </div>
            </div>
        {{-- </div> --}}
        @endforeach
    </div>
</div>
@endsection