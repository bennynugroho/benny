<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SumberInfo;
use Illuminate\Http\Request;

class SumberInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sumber = SumberInfo::all();

        return response()->json($sumber);
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
        SumberInfo::create([
            'info' => $request->sumber_info,
        ]);

        return back()->with('success', 'Sumber informasi berhasil ditambahkan');
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
        $sumber = SumberInfo::find($id);

        $view = '
            <div class="mb-3">
                <label for="sumber_info" class="form-label">Sumber Informasi</label>
                <input type="text" class="form-control" id="sumber_info" name="sumber_info" value="'. $sumber->info .'" placeholder="Masukkan sumber informasi pendaftaran" required>
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
        $sumber = SumberInfo::find($id);

        $sumber->update([
            'info' => $request->sumber_info,
        ]);

        return back()->with('success', 'Sumber informasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
