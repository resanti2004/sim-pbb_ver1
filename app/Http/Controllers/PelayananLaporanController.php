<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Sppt;

class PelayananLaporanController extends Controller
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
        return view('laporan.laporan_pelayanan_', compact('fullname', 'username'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function look(Request $request)
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        $post_data = $request->post();

        if (!empty($post_data)) {
            $model = new Sppt();
            $data = $model->laporanPelayanan(
                $post_data['tahun_awal'],
                $post_data['jns_pelayanan'],
                $post_data['start_date'],
                $post_data['end_date']
            );

            // Assuming you want to redirect to the 'pelayanan-grid' route
            return redirect()->route('laporan.pelayanan-grid');
        }
    }

    
}
