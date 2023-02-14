<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Http\Requests\StorepembeliRequest;
use App\Http\Requests\UpdatepembeliRequest;

class PembeliController extends Controller
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
     * @param  \App\Http\Requests\StorepembeliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepembeliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(pembeli $pembeli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepembeliRequest  $request
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepembeliRequest $request, pembeli $pembeli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembeli $pembeli)
    {
        //
    }
}
