<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
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
        $tahun_akademik = TahunAkademik::all();
        $tahun_id = $tahun_akademik->where('status', 1)->first();

        $data = [
            'tahun_akademik' => $tahun_akademik,
            'tahun_id' => $tahun_id,
            'seleksi' => Seleksi::all(),
            'pendaftar' => Pendaftar::where('thn_akd_id', $tahun_id->id)->get(),
        ];

        return view('admin.seleksi', $data);
    }
    
    public function showSeleksiTable(Request $request)
    {
        $seleksi = Seleksi::with(['daftar', 'tahun_akademik'])->where('thn_akd_id', $request->tahun_id)->get();

        $view = '';

        foreach ($seleksi as $s => $sel) {
            $view .= '
                    <tr>
                        <td class="text-center">'. ($s+1) .'</td>
                        <td>'. $sel->tahun_akademik->tahun .'</td>
                        <td>'. $sel->daftar->nama .'</td>
                        <td>'. $sel->nim .'</td>
                        <td>'. $sel->asal_sekolah .'</td>
                        <td class="text-nowrap">
                            <button class="btn btn-danger btn-sm" onclick="deleteData(`'. route('seleksi.destroy', ['seleksi' => $sel->id]) .'`)"><i class="bi bi-x"></i></button>
                            <button class="btn btn-success btn-sm" onclick="showEditSeleksi(`'. route('seleksi.edit', ['seleksi' => $sel->id]) .'`, `'. route('seleksi.update', ['seleksi' => $sel->id]) .'`, `Edit Data`)"><i class="bi bi-pencil-square"></i></button>
                        </td>
                    </tr>
            ';
        }

        return $view;
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
        Seleksi::create([
            'daftar_id'    => $request->daftar_id,
            'thn_akd_id'   => $request->tahun_id,
            'nim'          => $request->nim,
            'asal_sekolah' => $request->slta,
        ]);

        return back()->with('success', 'Berhasil menambahkan data');
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
        $seleksi = $seleksi->load(['daftar', 'tahun_akademik']);

        return response()->json($seleksi);
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
        $seleksi->update([
            'daftar_id'    => $request->daftar_id,
            'thn_akd_id'   => $request->tahun_id,
            'nim'          => $request->nim,
            'asal_sekolah' => $request->slta,
        ]);

        return back()->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seleksi  $seleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seleksi $seleksi)
    {
        $seleksi->delete();

        return 'Data berhasil dihapus';
    }
}
