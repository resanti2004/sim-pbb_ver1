<?php

namespace App\Http\Controllers;

use App\Models\Spop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SpopController extends Controller
{
    public function index()
    {
        // $data_spop = Spop::select('spop.*', 'berhak_njoptkp.nop')
        // ->leftJoin('berhak_njoptkp', function($join) {
        //     $join->on('spop.kd_propinsi', '=', 'berhak_njoptkp.kd_propinsi')
        //         ->on('spop.kd_dati2', '=', 'berhak_njoptkp.kd_dati2')
        //         ->on('spop.kd_kecamatan', '=', 'berhak_njoptkp.kd_kecamatan')
        //         ->on('spop.kd_kelurahan', '=', 'berhak_njoptkp.kd_kelurahan')
        //         ->on('spop.kd_blok', '=', 'berhak_njoptkp.kd_blok')
        //         ->on('spop.no_urut', '=', 'berhak_njoptkp.no_urut')
        //         ->on('spop.kd_jns_op', '=', 'berhak_njoptkp.kd_jns_op');
                 
        // })
        // ->get();
        $data_spop = Spop::paginate(20);
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
