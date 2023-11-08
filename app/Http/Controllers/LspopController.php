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
        // return view('spop.create');
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
