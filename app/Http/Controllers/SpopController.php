<?php

namespace App\Http\Controllers;

use App\Models\Spop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class SpopController extends Controller
{
    public function index()
    {
        // Eksekusi query SQL menggunakan metode DB
        $data_spop = DB::table('pbb.spop')
        ->join('berhak_njoptkp', function ($join) {
            $join->on('pbb.spop.KD_PROPINSI', '=', 'berhak_njoptkp.KD_PROPINSI')
                ->on('pbb.spop.KD_DATI2', '=', 'berhak_njoptkp.KD_DATI2')
                ->on('pbb.spop.KD_KECAMATAN', '=', 'berhak_njoptkp.KD_KECAMATAN')
                ->on('pbb.spop.KD_KELURAHAN', '=', 'berhak_njoptkp.KD_KELURAHAN')
                ->on('pbb.spop.KD_BLOK', '=', 'berhak_njoptkp.KD_BLOK')
                ->on('pbb.spop.NO_URUT', '=', 'berhak_njoptkp.NO_URUT')
                ->on('pbb.spop.KD_JNS_OP', '=', 'berhak_njoptkp.KD_JNS_OP');
        })
        ->select('pbb.spop.*', 'berhak_njoptkp.nop')
        ->paginate(25);
    

    // Menghitung nomor awal data yang ditampilkan pada halaman
        $no = ($data_spop->currentPage() - 1) * $data_spop->perPage() + 1;

        return view('spop.spop', compact('data_spop', 'no'));
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
