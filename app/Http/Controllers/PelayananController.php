<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\PelayananSearch;
use App\Models\StatusPelayanan;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class PelayananController extends Controller


{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {

    //     $data_user = DB::table('users');
    //     $user = $data_user->where('id', Auth()->user()->id)->first();
    //     $fullname = $user->fullname;
    //     $username = $user->username;

    //     $searchModel = new PelayananSearch();
    //     $status = StatusPelayanan::orderBy('urutan')->pluck('nama', 'id')->toArray();

    //     $dataProvider = $searchModel->search(request()->all());

    //     if (request()->has('hasEditable')) {
    //         $id = request()->post('editableKey');
    //         $model = Pelayanan::findOrFail($id);

    //         $pelayanan = ['Pelayanan' => current(request()->post('Pelayanan'))];
    //         if ($model->fill($pelayanan)->save()) {
    //             switch ($model->STATUS_PELAYANAN) {
    //                 case 2:
    //                     $model->TGL_MASUK_PENILAI = now();
    //                     $model->NIP_MASUK_PENILAI = Auth::user()->username;
    //                     break;
    //                 case 4:
    //                     $model->TGL_SELESAI = now();
    //                     $model->NIP_SELESAI = Auth::user()->username;
    //                     break;
    //                 case 5:
    //                     $model->TGL_TERKONFIRMASI_WP = now();
    //                     $model->NIP_TERKONFIRMASI_WP = Auth::user()->username;
    //                     break;
    //                 case 3:
    //                     $model->TGL_PENETAPAN = now();
    //                     $model->NIP_PENETAPAN = Auth::user()->username;
    //                     break;
    //                 case 6:
    //                     $model->TGL_BERKAS_DITUNDA = now();
    //                     $model->NIP_BERKAS_DITUNDA = Auth::user()->username;
    //                     break;
    //             }

    //             $model->save();

    //             if (isset($pelayanan['Pelayanan']['STATUS_PELAYANAN'])) {
    //                 return response()->json(['output' => $status[$model->STATUS_PELAYANAN], 'message' => '']);
    //             } else {
    //                 return response()->json(['output' => $model->KETERANGAN_BERKAS, 'message' => '']);
    //             }
    //         }
    //         return response()->json(['output' => '', 'message' => 'Gagal']);
    //     }

    //     return view('pelayanan.pelayanan', compact('searchModel', 'dataProvider', 'status', 'username', 'fullname'));
    // }

    public function index()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

        $data_pelayanan = Pelayanan::all();
        $no = 1;
        return(view('pelayanan.pelayanan', compact('fullname', 'username')));
    }




//     public function data()
// {
    
//     try {
//         $data = Pelayanan::query()->get();
    
//         return DataTables::of($data);
//     } catch (\Exception $e) {
//         Log::error($e->getMessage());
//         return response()->json(['error' => 'An error occurred while fetching data.']);
//     }
// }

public function data(Request $request)
{
    $perPage = $request->input('length', 25);
    $page = $request->input('start', 0) / $perPage + 1;

    $query = Pelayanan::query();

    // Apply additional filters or conditions based on DataTables request
    // Example: if ($request->has('some_column')) $query->where('some_column', $request->input('some_column'));

    // Handle global search
    if ($request->filled('search.value')) {
        $searchValue = $request->input('search.value');
        $query->where(function ($query) use ($searchValue) {
            // Adjust column names as per your database schema
            $query->orWhere('NO_PELAYANAN', 'like', "%$searchValue%")
                ->orWhere('NAMA_PEMOHON', 'like', "%$searchValue%")
                ->orWhere('TANGGAL_PELAYANAN', 'like', "%$searchValue%")
                ->orWhere('KECAMATAN', 'like', "%$searchValue%")
                ->orWhere('KELURAHAN', 'like', "%$searchValue%")
                ->orWhere('KD_BLOK', 'like', "%$searchValue%")
                ->orWhere('NO_URUT', 'like', "%$searchValue%")
                ->orWhere('KD_JNS_PELAYANAN', 'like', "%$searchValue%")
                ->orWhere('STATUS_PELAYANAN', 'like', "%$searchValue%")
                ->orWhere('KETERANGAN_BERKAS', 'like', "%$searchValue%");
        });
    }

    $pelayanans = $query->paginate($perPage, ['*'], 'page', $page);


    foreach ($pelayanans->items() as $index => $pelayanan) {
        $pelayanan->DT_RowIndex = $index + 1 + ($page - 1) * $perPage;
        $pelayanan->TANGGAL_PELAYANAN = Carbon::parse($pelayanan->TANGGAL_PELAYANAN)->format('Y-m-d');
    }

    return response()->json([
        'data' => $pelayanans->items(),
        'draw' => $request->input('draw', 1),
        'recordsTotal' => $pelayanans->total(),
        'recordsFiltered' => $pelayanans->total(),
    ]);
}





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;


        return (view('pelayanan.add_pelayanan', compact('fullname', 'username')));
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
    public function edit()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;
        return (view('pelayanan.edit_pelayanan', compact('fullname', 'username')));
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
