<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sppt;

class SummaryNeracaBPKController extends Controller
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
        return view('laporan.summary_neraca_bpk', compact('fullname', 'username'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function print(Request $request)
    {   
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

        $post_data = $request->all();
        $model = new Sppt();
        $data = $model->neracaBpkSummary($post_data['tahun_awal'],$post_data['tahun_akhir'],$post_data['per_tanggal']);

        $report_file = 'cetak_summary_neraca_bpk';

        return view('laporan.' . $report_file, [
            'data' => $data,
            'fullname' => $fullname,
            'username' => $username,
        ]);
    }

   
}
