<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lspop;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class LspopController extends Controller
{
    public function index()
    {
        // Eksekusi query SQL menggunakan metode DB
        $data_lspop = DB::table('pbb.lspop')
        ->join('berhak_njoptkp', function ($join) {
            $join->on('pbb.lspop.KD_PROPINSI', '=', 'berhak_njoptkp.KD_PROPINSI')
                ->on('pbb.lspop.KD_DATI2', '=', 'berhak_njoptkp.KD_DATI2')
                ->on('pbb.lspop.KD_KECAMATAN', '=', 'berhak_njoptkp.KD_KECAMATAN')
                ->on('pbb.lspop.KD_KELURAHAN', '=', 'berhak_njoptkp.KD_KELURAHAN')
                ->on('pbb.lspop.KD_BLOK', '=', 'berhak_njoptkp.KD_BLOK')
                ->on('pbb.lspop.NO_URUT', '=', 'berhak_njoptkp.NO_URUT')
                ->on('pbb.lspop.KD_JNS_OP', '=', 'berhak_njoptkp.KD_JNS_OP');
        })
        ->select('pbb.lspop.*', 'berhak_njoptkp.nop')
        ->paginate(25);
    

    // Menghitung nomor awal data yang ditampilkan pada halaman
        $no = ($data_lspop->currentPage() - 1) * $data_lspop->perPage() + 1;

        return view('lspop.lspop', compact('data_lspop', 'no'));
    }
    public function create()
    {
        return view('lspop.add_lspop');
    }
    public function store(Request $request){
        $request->validate([
            'KodeProvinsi' => 'required',
            'KodeDati2' => 'required',
            'KodeKecamatan' => 'required',
            'KodeKelurahan' => 'required',
            'KodeBlok' => 'required',
            'NoUrut' => 'required',
            'KodeJenisOp' => 'required',
            'NoBangunan' => 'required',
            'KodeJpb' => 'required',
            'NoFormulirLspop' => 'required',
            'TahunDibangunBangunan' => 'required',
            'TahunRenovasiBangunan' => 'required',
            'LuasBangunan' => 'required',
            'JumlahLantaiBangunan' => 'required',
            'KondisiBangunan' => 'required',
            'JenisKonstruksiBangunan' => 'required',
            'JenisAtapBangunan' => 'required',
            'KdDinding' => 'required',
            'KdLantai' => 'required',
            'KdLangit_Langit' => 'required',
            'NilaiSistemBangunan' => 'required',
            'JenisTransaksiKelurahan' => 'required',
            'TanggalPendataanBangunan' => 'required',
            'NIPPendataBangunan' => 'required',
            'TanggalPemeriksaanBangunan' => 'required',
            'NIPPemeriksaBangunan' => 'required',
            'TanggalPerekamanBangunan' => 'required',
            'NIPPerekamBangunan' => 'required',
            'TanggalKunjunganKembali' => 'required',
            'NilaiIndividu' => 'required',
            'Aktif' => 'required',
        ]);
        
        
        $lspop = new Lspop();
        $lspop->KD_PROPINSI = $request->KodeProvinsi;
        $lspop->KD_DATI2 = $request->KodeDati2;
        $lspop->KD_KECAMATAN = $request->KodeKecamatan;
        $lspop->KD_KELURAHAN = $request->KodeKelurahan;
        $lspop->KD_BLOK = $request->KodeBlok;
        $lspop->NO_URUT = $request->NoUrut;
        $lspop->KD_JNS_OP = $request->KodeJenisOp;
        $lspop->NO_BNG = $request->NoBangunan;
        $lspop->KD_JPB = $request->KodeJpb;
        $lspop->NO_FORMULIR_LSPOP = $request->NoFormulirLspop;
        $lspop->THN_DIBANGUN_BNG = $request->TahunDibangunBangunan;
        $lspop->THN_RENOVASI_BNG = $request->TahunRenovasiBangunan;
        $lspop->LUAS_BNG = $request->LuasBangunan;
        $lspop->JML_LANTAI_BNG = $request->JumlahLantaiBangunan;
        $lspop->KONDISI_BNG = $request->KondisiBangunan;
        $lspop->JNS_KONSTRUKSI_BNG = $request->JenisKonstruksiBangunan;
        $lspop->JNS_ATAP_BNG = $request->JenisAtapBangunan;
        $lspop->KD_DINDING = $request->KdDinding;
        $lspop->KD_LANTAI = $request->KdLantai;
        $lspop->KD_LANGIT_LANGIT = $request->KdLangit_Langit;
        $lspop->NILAI_SISTEM_BNG = $request->NilaiSistemBangunan;
        $lspop->jenis_transaksi_kelurahan = $request->JenisTransaksiKelurahan;
        $lspop->TGL_PENDATAAN_BNG = $request->TanggalPendataanBangunan;
        $lspop->NIP_PENDATA_BNG = $request->NIPPendataBangunan;
        $lspop->TGL_PEMERIKSAAN_BNG = $request->TanggalPemeriksaanBangunan;
        $lspop->NIP_PEMERIKSA_BNG = $request->NIPPemeriksaBangunan;
        $lspop->tanggal_perekaman_bangunan = $request->TanggalPerekamanBangunan;
        $lspop->nip_perekam_bangunan = $request->NIPPerekamBangunan;
        $lspop->TGL_KUNJUNGAN_KEMBALI = $request->TanggalKunjunganKembali;
        $lspop->NILAI_INDIVIDU = $request->NilaiIndividu;
        $lspop->AKTIF = $request->Aktif;
       
        $lspop->save();
        

        return redirect()->route('lspop.index')
            ->with('success', 'LSPOP berhasil ditambah.');
    }

    public function edit()
    {
        // return view('spop.edit');
    }
    public function update()
    {
        // 
    }
    public function delete()
    {
        // return view('spop.delete');
    }
}
