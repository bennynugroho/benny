<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JalurMasuk;
use Illuminate\Http\Request;

class JalurMasukController extends Controller
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
        $view = '
            <div class="mb-3">
                <label for="judul" class="form-label">Nama</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan nama jalur masuk" required>
            </div>
            <div class="mb-3">
                <label for="tgl_akhir" class="form-label">Tanggal Berakhir</label>
                <input type="date" class="form-control" name="tgl_akhir" id="tgl_akhir" placeholder="Masukkan tanggal" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan jalur masuk" required></textarea>
            </div>
        ';

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JalurMasuk::create([
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'tgl_akhir'  => $request->tgl_akhir,
        ]);

        return back()->with('success', 'Jalur masuk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jalur = JalurMasuk::find($id);

        $view = '
            <div class="mb-3">
                <label for="judul" class="form-label">Nama</label>
                <input type="text" class="form-control" name="judul" id="judul" value="'. $jalur->judul .'" placeholder="Masukkan nama jalur masuk" required>
            </div>
            <div class="mb-3">
                <label for="tgl_akhir" class="form-label">Tanggal Berakhir</label>
                <input type="date" class="form-control" name="tgl_akhir" id="tgl_akhir" value="'. $jalur->tgl_akhir .'" placeholder="Masukkan tanggal" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan jalur masuk" required>'. $jalur->keterangan .'</textarea>
            </div>
        ';

        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jalur = JalurMasuk::find($id);

        $jalur->update([
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'tgl_akhir'  => $request->tgl_akhir,
        ]);

        return back()->with('success', 'Jalur masuk berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jalur = JalurMasuk::find($id);

        $jalur->delete();

        return 'Jalur masuk berhasil dihapus';
    }
}
