<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealisasiKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return view('laporan.realisasi_kelurahan', compact('fullname', 'username'));
    }


    public function store(Request $request)
    {
        $THN_PAJAK_SPPT = $request->input('THN_PAJAK_SPPT');
        $PBB_MIN = $request->input('PBB_MIN');
        $PBB_MAX = $request->input('PBB_MAX');
        $TGL_REALISASI = $request->input('TGL_REALISASI');

        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

        $val = DB::table('sppt')
            ->select(
                'ref_kecamatan.NM_KECAMATAN',
                'ref_kelurahan.NM_KELURAHAN',
                DB::raw('SUM(PBB_YG_HARUS_DIBAYAR_SPPT) AS POKOK_TERHUTANG'),
                DB::raw('SUM(IFNULL(DENDA_SPPT, 0)) AS DENDA_BAYAR'),
                DB::raw('SUM(IFNULL(JML_SPPT_YG_DIBAYAR, 0)) AS JUMLAH_BAYAR'),
                DB::raw('SUM(IFNULL(JML_SPPT_YG_DIBAYAR, 0) - IFNULL(DENDA_SPPT, 0)) AS POKOK_BAYAR'),
                DB::raw('SUM(PBB_YG_HARUS_DIBAYAR_SPPT - IFNULL(JML_SPPT_YG_DIBAYAR, 0) + IFNULL(DENDA_SPPT, 0)) AS KURANG_BAYAR'),
                DB::raw('SUM(IFNULL(JML_SPPT_YG_DIBAYAR, 0) - IFNULL(DENDA_SPPT, 0) - PBB_YG_HARUS_DIBAYAR_SPPT) AS LEBIH_BAYAR')

            )
            ->leftJoin('pembayaran_sppt', function ($join) use ($TGL_REALISASI) {
                $join->on('sppt.KD_PROPINSI', '=', 'pembayaran_sppt.KD_PROPINSI')
                    ->on('sppt.KD_DATI2', '=', 'pembayaran_sppt.KD_DATI2')
                    ->on('sppt.KD_KECAMATAN', '=', 'pembayaran_sppt.KD_KECAMATAN')
                    ->on('sppt.KD_KELURAHAN', '=', 'pembayaran_sppt.KD_KELURAHAN')
                    ->on('sppt.KD_BLOK', '=', 'pembayaran_sppt.KD_BLOK')
                    ->on('sppt.NO_URUT', '=', 'pembayaran_sppt.NO_URUT')
                    ->on('sppt.KD_JNS_OP', '=', 'pembayaran_sppt.KD_JNS_OP')
                    ->on('sppt.THN_PAJAK_SPPT', '=', 'pembayaran_sppt.THN_PAJAK_SPPT')
                    ->where('TGL_PEMBAYARAN_SPPT', '<=', $TGL_REALISASI);
            })
            ->leftJoin('ref_kecamatan', function ($join) {
                $join->on('sppt.KD_PROPINSI', '=', 'ref_kecamatan.KD_PROPINSI')
                    ->on('sppt.KD_DATI2', '=', 'ref_kecamatan.KD_DATI2')
                    ->on('sppt.KD_KECAMATAN', '=', 'ref_kecamatan.KD_KECAMATAN');
            })
            ->leftJoin('ref_kelurahan', function ($join) {
                $join->on('sppt.KD_PROPINSI', '=', 'ref_kelurahan.KD_PROPINSI')
                    ->on('sppt.KD_DATI2', '=', 'ref_kelurahan.KD_DATI2')
                    ->on('sppt.KD_KECAMATAN', '=', 'ref_kelurahan.KD_KECAMATAN')
                    ->on('sppt.KD_KELURAHAN', '=', 'ref_kelurahan.KD_KELURAHAN');
            })
            ->where('sppt.THN_PAJAK_SPPT', $THN_PAJAK_SPPT)
            ->whereBetween('PBB_YG_HARUS_DIBAYAR_SPPT', [$PBB_MIN, $PBB_MAX])
            ->groupBy('ref_kecamatan.NM_KECAMATAN', 'ref_kelurahan.NM_KELURAHAN')
            ->get();



        $no = 1;

        return view('laporan.realisasi_kelurahan', compact('no', 'fullname', 'username', 'val'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storage(Request $request)
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

        $tahun = $request->input('Tahun');
        $pbb_minimum = $request->input('PBBMinimum');
        $pbb_maximum = $request->input('PBBMaximum');
        $tanggal_realisasi = $request->input('TanggalRealisasi');

        $val = DB::table('spop')
            ->join('pelayanan', 'spop.id', '=', 'pelayanan.id_spop')
            ->join('ref_kelurahan', 'spop.id_kelurahan', '=', 'kelurahan.kd_kelurahan')
            ->join('ref_kecamatan', 'ref_kelurahan.kd_kecamatan', '=', 'kecamatan.kd_kecamatan')
            ->join('ref_dati2', 'ref_kecamatan.kd_dati2', '=', 'kabupaten.kd_dati2')
            ->join('ref_propinsi', 'ref_dati2.kd_propinsi', '=', 'propinsi.kd_propinsi ')
            ->where('pelayanan.tanggal_realisasi', '<=', $tanggal_realisasi)
            ->where('pelayanan.tanggal_realisasi', '!=', null)
            ->where('pelayanan.tahun', '=', $tahun)
            ->where('pelayanan.status', '=', '1')
            ->where('pelayanan.pbb_terhutang', '>=', $pbb_minimum)
            ->where('pelayanan.pbb_terhutang', '<=', $pbb_maximum)
            ->select('ref_propinsi.nm_propinsi', 'ref_dati2.nm_dati2', 'ref_kecamatan.nm_kecamatan', 'ref_kelurahan.nm_kelurahan', 'pelayanan.pbb_terhutang', 'pelayanan.pbb_yang_dibayar', 'pelayanan.denda', 'pelayanan.tgl_realisasi')
            ->get();

        $no = 1;

        return view('laporan.realisasi_kelurahan', compact('no', 'fullname', 'username', 'val', 'total_pokok', 'total_pokok_dibayar', 'total_denda_dibayar', 'total_dibayar', 'total_kurang_bayar', 'total_lebih_bayar', 'tahun', 'pbb_minimum', 'pbb_maximum', 'tanggal_realisasi'));
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
