<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PelayananController extends Controller
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

        $data_pelayanan = Pelayanan::paginate(25);
        $no = ($data_pelayanan->currentPage() - 1) * $data_pelayanan->perPage() + 1;
        return(view('pelayanan.pelayanan', compact('fullname', 'username', 'data_pelayanan', 'no')));
    }

    // public function index()
    // {
    //     $searchModel = new PelayananSearch();
    //     $status = StatusPelayanan::orderBy('urutan')->pluck('nama', 'id');

    //     $dataProvider = $searchModel->search(request()->query());

    //     if (request()->post('hasEditable')) {
    //         $id = request()->post('editableKey');
    //         $model = $this->findModel($id);

    //         $pelayanan = ['Pelayanan' => current(request()->post('Pelayanan'))];
    //         if ($model->fill($pelayanan)->save()) {
    //             $this->handleStatusPelayanan($model);

    //             $output = isset($pelayanan['Pelayanan']['STATUS_PELAYANAN'])
    //                 ? $status[$model->STATUS_PELAYANAN]
    //                 : $model->KETERANGAN_BERKAS;

    //             return response()->json(['output' => $output, 'message' => '']);
    //         }

    //         return response()->json(['output' => '', 'message' => 'Gagal']);
    //     }

    //     return view('your-view-name', compact('searchModel', 'dataProvider', 'status'));
    // }

    // private function handleStatusPelayanan($model)
    // {
    //     switch ($model->STATUS_PELAYANAN) {
    //         case 2:
    //             $model->TGL_MASUK_PENILAI = now();
    //             $model->NIP_MASUK_PENILAI = auth()->user()->username;
    //             break;
    //         case 4:
    //             $model->TGL_SELESAI = now();
    //             $model->NIP_SELESAI = auth()->user()->username;
    //             break;
    //         case 5:
    //             $model->TGL_TERKONFIRMASI_WP = now();
    //             $model->NIP_TERKONFIRMASI_WP = auth()->user()->username;
    //             break;
    //         case 3:
    //             $model->TGL_PENETAPAN = now();
    //             $model->NIP_PENETAPAN = auth()->user()->username;
    //             break;
    //         case 6:
    //             $model->TGL_BERKAS_DITUNDA = now();
    //             $model->NIP_BERKAS_DITUNDA = auth()->user()->username;
    //             break;
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;


        return(view('pelayanan.add_pelayanan', compact('fullname', 'username')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Pelayanan::$rules);

        if ($validator->fails()) {
            return redirect()->route('pelayanan.create')->withErrors($validator)->withInput();
        }

        $data = $request->all();
        
    }
    public function laporan()
    {   
        
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        

        return view('pelayanan.laporan_pelayanan', compact('fullname', 'username'));
    } 

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return view('pelayanan.detail_pelayanan', compact('fullname', 'username'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return(view('pelayanan.edit_pelayanan', compact('fullname', 'username')));
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
