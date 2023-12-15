<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Sppt;

class SummaryNeracaKPPController extends Controller
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
        return view('laporan.summary_neraca_kpp', compact('fullname', 'username'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function look(Request $request)
    {
        $post_data = request()->post();

        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        $no = 1;
        if (!empty($post_data)) {
            $model = new Sppt();
            $model->neracaKppSummary($post_data['tahun_awal'], $post_data['tahun_akhir'], $post_data['per_tanggal'],$post_data['tahun_neraca']);
            // dd($model->data);
            return view('laporan.summary_neraca_kpp_lihat', [
                'data' => $model->data,
                'post_data' => $post_data,
                'fullname' => $fullname,
                'username' => $username,
                'no' => $no

            ]);
        }

        return view('laporan.summary_neraca_kpp', [
            'tahun_awal' => date('Y'),
            'tahun_akhir' => date('Y'),
            'per_tanggal' => date('Y-m-d')
    ]);
    }

    
}
