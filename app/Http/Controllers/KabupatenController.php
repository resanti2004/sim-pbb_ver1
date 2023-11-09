<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefDati2;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kab = RefDati2::orderBy('kd_propinsi', 'asc')
        ->paginate(25);

        $no = ($data_kab->currentPage() - 1) * $data_kab->perPage() + 1;
        return view('kabupaten.kabupaten', compact('data_kab', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kabupaten.add_kabupaten');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'inputKodeProvinsi' => 'required',
            'inputKodeDati2' => 'required',
            'inputNamaDati2' => 'required',
        ]);
        
        $kabupaten = new RefDati2();
        
        $kabupaten->kd_propinsi= $request->inputKodeProvinsi;
        $kabupaten->kd_dati2 = $request->inputKodeDati2;
        $kabupaten->nm_dati2 = $request->inputNamaDati2;
        
        $kabupaten->save();
        

        return redirect()->route('kabupaten.index')
            ->with('success', 'Kabupaten berhasil ditambah.');
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
