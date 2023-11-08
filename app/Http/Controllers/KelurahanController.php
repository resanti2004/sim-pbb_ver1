<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\RefKelurahan;

class KelurahanController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kelurahan = RefKelurahan::orderBy('kd_kelurahan', 'asc')
        ->paginate(25);
        // dd($data_kelurahan);
        $no = ($data_kelurahan->currentPage() - 1) * $data_kelurahan->perPage() + 1;
        return view('kelurahan.kelurahan', compact('data_kelurahan', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelurahan.add_kelurahan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        $request->validate([
            'inputKodeProvinsi' => 'required',
            'inputKodeDati2' => 'required',
            'inputKodeKecamatan' => 'required',
            'inputKodeKelurahan' => 'required',
            'inputKodeSektor' => 'required',
            'inputNamaKelurahan' => 'required',
            'inputNomorKelurahan' => 'required',
            'inputKodePosKelurahan' => 'required',
        ]);
        
        $kelurahan = new RefKelurahan;
        $kelurahan->kd_propinsi = $request->inputKodeProvinsi;
        $kelurahan->kd_dati2 = $request->inputKodeDati2;
        $kelurahan->kd_kecamatan = $request->inputKodeKecamatan;
        $kelurahan->kd_kelurahan = $request->inputKodeKelurahan;
        $kelurahan->kd_sektor = $request->inputKodeSektor;
        $kelurahan->nm_kelurahan = $request->inputNamaKelurahan;
        $kelurahan->no_kelurahan = $request->inputNomorKelurahan;
        $kelurahan->kd_pos_kelurahan = $request->inputKodePosKelurahan;
        $kelurahan->save();
        // dd($request->all());

        return redirect()->route('kelurahan.index')
            ->with('success', 'Kelurahan berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
