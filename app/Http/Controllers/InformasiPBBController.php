<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelayanan;
use App\Models\Sppt;
use Illuminate\Support\Facades\Session;


class InformasiPBBController extends Controller
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
        return view('laporan.informasi_pbb', compact('fullname', 'username'));
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
    public function store(Request $request)
    {
       
        $post_data = $request->input();
        
        if (!empty($post_data)) {
            $model = new Sppt();
            $nop = str_replace('.', '', $post_data['nop']);
            $data = $model->getSkNjop($nop, $post_data['tahun']);
            $pelayanan = Pelayanan::where('no_pelayanan', $post_data['no_pelayanan'])->first();
            
            if (empty($pelayanan) || empty($data)) {
                Session::flash('error', 'Tidak Ada Data');
                return redirect()->route('info-pbb');
            }

            $report_file = 'cetak_info_pbb';
            return view($report_file, [
                'data' => $data,
                'no_pelayanan' => $post_data['no_pelayanan'],
                'tanggal_pelayanan' => $pelayanan->TANGGAL_PELAYANAN,
                'tahun' => $post_data['tahun']
            ])->with('layout', 'report');
        }

        return view('info_pbb');
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
