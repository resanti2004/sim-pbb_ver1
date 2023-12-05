<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function print(Request $request)
    {
        
    }

    
}
