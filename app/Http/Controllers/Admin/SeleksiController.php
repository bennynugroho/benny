<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seleksi;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'tahun_akademik' => TahunAkademik::all(),
            'seleksi' => Seleksi::all(),
        ];

        return view('admin.seleksi', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function show(Seleksi $seleksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Seleksi $seleksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seleksi $seleksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seleksi $seleksi)
    {
        //
    }
}
