<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Http\Requests\StorepemesananRequest;
use App\Http\Requests\UpdatepemesananRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepemesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pemesanan::create([
            'JUDUL' => $request->judul,
            'ASAL_INSTANSI' => $request->asal_instansi,
            'DESKRIPSI' => $request->deskripsi,
            'JENIS_KONTEN' => $request->jenis_konten,
            'id_user' => $request->id_user,
            'TGL_UPLOAD' => $request->tgl_upload,
            'MEDIA' => $request->media,
            'LINK_POSTER' => $request->link_poster,
            'JENIS_KONTEN' => $request->jenis_konten,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pemesanan', [
            "pesan" => pemesanan::all()
        ]);
    }

    public function showbyId($id)
    {
        $pemesanan = pemesanan::findOrFail($id);
        return view('detail', [
            "pesan" => $pemesanan
        ]);
    }

    public function show3()
    {
        $id = 0;
        if (Auth::check()) {
            $id = auth::user()->id;
        };
        $pesan = pemesanan::where('id_user', $id)->latest()->paginate(3);
        return view('start', [
            "pesan" => $pesan
            // "pesan" => DB::table('pemesanans')->orderBy('id', 'desc')->take(3)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepemesananRequest  $request
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepemesananRequest $request, pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemesanan $pemesanan)
    {
        //
    }
}
