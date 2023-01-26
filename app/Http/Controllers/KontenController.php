<?php

namespace App\Http\Controllers;

use App\Models\konten;
use App\Http\Requests\StorekontenRequest;
use App\Http\Requests\UpdatekontenRequest;

class KontenController extends Controller
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
     * @param  \App\Http\Requests\StorekontenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekontenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show(konten $konten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit(konten $konten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekontenRequest  $request
     * @param  \App\Models\konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekontenRequest $request, konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy(konten $konten)
    {
        //
    }
}
