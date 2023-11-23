<?php

namespace App\Http\Controllers;

use App\Models\DatOpBangunan;
use Illuminate\Http\Request;
use App\Models\Lspop;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class LspopController extends Controller
{
    public function index()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

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

        return view('lspop.lspop', compact('data_lspop', 'no', 'fullname', 'username'));
    }
    public function create()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return view('lspop.add_lspop', compact('fullname', 'username'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'KodeProvinsi' => 'required',
            'KodeDati2' => 'required',
            'KodeKecamatan' => 'required',
            'KodeKelurahan' => 'required',
            'KodeBlok' => 'required',
            'NoUrut' => 'required',
            'KodeJenisOp' => 'required',
            'NoBangunan' => 'required|integer',
            'KodeJpb' => 'nullable',
            'NoFormulirLspop' => 'nullable',
            'TahunDibangunBangunan' => 'required',
            'TahunRenovasiBangunan' => 'nullable',
            'LuasBangunan' => 'required|integer',
            'JumlahLantaiBangunan' => 'required|integer',
            'KondisiBangunan' => 'nullable',
            'JenisKonstruksiBangunan' => 'nullable',
            'JenisAtapBangunan' => 'nullable',
            'KdDinding' => 'nullable',
            'KdLantai' => 'nullable',
            'KdLangit_Langit' => 'nullable',
            'NilaiSistemBangunan' => 'required|integer',
            'JenisTransaksiKelurahan' => 'nullable',
            'TanggalPendataanBangunan' => 'required|date',
            'NIPPendataBangunan' => 'required',
            'TanggalPemeriksaanBangunan' => 'required|date',
            'NIPPemeriksaBangunan' => 'required',
            'TanggalPerekamanBangunan' => 'required|date',
            'NIPPerekamBangunan' => 'required',
            'TanggalKunjunganKembali' => 'nullable|date',
            'NilaiIndividu' => 'required|integer',
            'Aktif' => 'required|boolean',
        ]);
        


        $lspop = new DatOpBangunan();
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
        $lspop->TGL_PEREKAMAN_BNG = $request->TanggalPerekamanBangunan;
        $lspop->NIP_PEREKAM_BNG = $request->NIPPerekamBangunan;
        $lspop->TGL_KUNJUNGAN_KEMBALI = $request->TanggalKunjunganKembali;
        $lspop->NILAI_INDIVIDU = $request->NilaiIndividu;
        $lspop->AKTIF = $request->Aktif;
        $lspop->updateOrCreate(
            [
                'KD_PROPINSI' => $request->KodeProvinsi,
                'KD_DATI2' => $request->KodeDati2,
                'KD_KECAMATAN' => $request->KodeKecamatan,
                'KD_KELURAHAN' => $request->KodeKelurahan,
                'KD_BLOK' => $request->KodeBlok,
                'NO_URUT' => $request->NoUrut,
                'KD_JNS_OP' => $request->KodeJenisOp,
                'NO_BNG' => $request->NoBangunan,
            ],
            $lspop->toArray()
        );


        return redirect()->route('lspop.index')
            ->with('success', 'LSPOP berhasil ditambah.');
    }

    public function edit()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        $data_lspop = DB::table('pbb.lspop');
        // $data_lspop->where('nop', $lspop);
        return view('lspop.edit_lspop', compact('data_lspop', 'fullname', 'username'));
    }
    public function update()
    {
        // 
    }
    public function destroy($lspop)
    {
        $data_lspop = DB::table('pbb.berhak_njoptkp');
        $data_lspop->where('nop', $lspop);
        $data_lspop->delete();
        return redirect()->route('lspop.index')
            ->with('success', 'LSPOP berhasil dihapus.');
    }

    public function show()
    {
        // Fetch user data
        // $no = $no;
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

        // Return the view with the user and Kelurahan data
        return view('lspop.detail_lspop', compact('fullname', 'username'));
    }
}
