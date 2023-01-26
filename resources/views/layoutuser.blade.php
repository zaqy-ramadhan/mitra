<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mitra</title>
    <link rel="icon" href="assets/mitra-logo-white.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssku.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    {{-- https://colorhunt.co/palette/432c7a80489cff8fb1fce2db --}}
</head>
<body style="font-family:poppins; background-image: linear-gradient(to bottom right, rgb(245, 245, 245), #e8e8e8)">
    <nav>
        <div class="container-fluid fixed-bottom p-2">
            <div class="container mb-2 d-flex align-items-center justify-content-center shadow" style="background-image: linear-gradient(to bottom right, #432C7A, #80489C); height:75px; border-radius:750px; border: solid #FCE2DB 5px">
                <div class="row">
                    <div class="col mx-3">
                        <a href="/pesan"><img src="{{ asset('assets/mail-icon-pink.png') }}" alt="" style="height: 50px"></a>
                    </div>
                    <div class="col mx-3">
                        <a href="/"><img src="{{ asset('assets/home-icon-pink.png') }}" alt="" style="height: 50px"></a>
                    </div>
                    <div class="col mx-3">
                        <a href="" @auth data-bs-toggle="modal" data-bs-target="#profile" @else data-bs-toggle="modal" data-bs-target="#pesan" @endauth><img src="{{ asset('assets/ava-icon-pink.png') }}" alt="" style="height: 50px"></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex align-items-center justify-content-center p-2" style="background-image: linear-gradient(to bottom right, #432C7A, #80489C); border-bottom: solid #FCE2DB 5px">
        <img class="mb-2" src="{{ asset('assets/mitra-pink.png') }}" alt="" style="height: 50px">
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="container-fluid text-center mt-5 p-5" style="background-color: #80489C; height:250px; color:#FCE2DB">
        <img src="{{ asset('assets/mitra-pink.png') }}" alt="" style="height: 50px">
        <div class="d-flex justify-content-center align-items-center mt-2">
            <img class="me-1" src="{{ asset('assets/c.png') }}" style="height: 15px">
            Jakik 2023. All Rights Reserved
        </div>
    </footer>

        {{-- modal profil--}}
        <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="color: #432C7A;">
                @auth
                <div class="modal-header" style="background:#80489C; border-bottom: solid #FCE2DB 5px; color:#FCE2DB">
                <h5 class="modal-title" id="exampleModalLabel">Halo, {{ Auth::user()->name }} !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-1">
                    <a style="color: #432C7A" class="dropdown-item" href="/pemesanan">Pesanan</a>
                    <a style="color: #432C7A" class="dropdown-item" href="/myprofile">Profil</a>
                    <a style="color: #432C7A" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
                @endauth   
            </div>
            </div>
        </div>

            {{-- modal pesan--}}
    <div class="modal fade" id="pesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            @auth
            <div class="modal-header" style="background:#80489C; border-bottom: solid #FCE2DB 5px; color:#FCE2DB">
            <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div  class="modal-body p-4">
            <form method="post" class="row g-3" action="/create_pesan">
                @csrf
                <div class="mb-3" hidden>
                    <input name="id_user" type="text" class="form-control" value="{{ Auth::user()->id }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Instansi</label>
                    <input name="asal_instansi" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input name="judul" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Media</label>
                    <select name="media" class="form-select" aria-label="Default select example">
                        <option value="instagram">Instagram</option>
                        <option value="youtube">Youtube</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="spotify">Spotify</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Konten</label>
                    <select name="jenis_konten" class="form-select" aria-label="Default select example">
                        <option value="gambar">Gambar</option>
                        <option value="video">Video</option>
                        <option value="audio">Audio</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Upload</label>
                    <input name="tgl_upload" type="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                      <textarea name="deskripsi" type="text" class="form-control" cols="30" rows="10" required></textarea>
                      <div class="form-text">Deskripsi konten</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link Poster (Jika ada)</label>
                    <input name="link_poster" type="text" class="form-control">
                </div>
                <button type="submit" class="btn shadow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px">Submit</button>
            </form>
            </div>
            @else
            <div class="modal-header" style="background:#80489C; border-bottom: solid #FCE2DB 5px">
            <h5 class="modal-title" id="exampleModalLabel" style="color:#FCE2DB">Login untuk melanjutkan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="centering p-4">
            <a href="{{ route('login') }}"><button type="submit" class="btn" style="background-color: #80489C; color:#FCE2DB;">Login</button></a>
            </div>
            @endauth   
        </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jsku.js') }}"></script>
    {{-- <script src="js/fontawesome.min.js"></script> --}}
    <script src="{{ asset('https://code.iconify.design/2/2.2.1/iconify.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/58c595958e.js') }}" crossorigin="anonymous"></script>
</body>
</html>