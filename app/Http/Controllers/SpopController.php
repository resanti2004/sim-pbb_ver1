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
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
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

        return view('spop.spop', compact('data_spop', 'no', 'fullname', 'username'));
    }
    public function create()
    {   
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return view('spop.add_spop', compact('fullname', 'username'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kd_prov' => 'required|unique:ref_propinsi|numeric',
            'kd_dati' => 'required',
        ]);
        
        
        // $provinsi = new RefPropinsi;
        // $provinsi->kd_propinsi = $request->kd_propinsi;
        // $provinsi->nm_propinsi = $request->nm_propinsi;
        // $provinsi->save();
        

        return redirect()->route('spop.index')
            ->with('success', 'SPOP berhasil ditambah.');
    }
    public function edit($spop)
    {   
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        $data_spop = DB::table('pbb.spop');
        $data_spop->where('nop', $spop);
        return view('spop.edit_spop', compact('data_spop', 'fullname', 'username'));
    }
    public function update(Request $request)
    {
         
    }
    public function destroy($spop)
    {
        $data_spop = DB::table('pbb.berhak_njoptkp');
        $data_spop->where('nop', $spop);
        $data_spop->delete();
        return redirect()->route('spop.index')
            ->with('success', 'SPOP berhasil dihapus.');
    }
}
