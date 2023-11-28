<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpopRequest;
use App\Models\Spop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Models\BerhakNjoptkp;
use App\Models\DatSubjekPajak;
use App\Models\RefPropinsi;

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
        // Validate the request...


        // Ambil data yang dikirim dari form
            $model = new Spop();
            $modelWp = new DatSubjekPajak();

            // dd($request->all());
    
            $propinsis = RefPropinsi::pluck('NM_PROPINSI', 'KD_PROPINSI');
    
            $model->KD_PROPINSI = '51';
            $model->KD_DATI2 = '71';
            $model->KD_KECAMATAN = '010';
            $model->KD_KELURAHAN = '001';
            $model->KD_BLOK = '001';
            $model->KD_JNS_OP = '0';
            $model->LUAS_BUMI = 0;
            $model->NILAI_SISTEM_BUMI = 0;
            $model->TGL_PENDATAAN_OP = now()->toDateString();
            $model->TGL_PEMERIKSAAN_OP = now()->toDateString();
            $model->NIP_PENDATA = 9009090;
            $model->NIP_PEMERIKSA_OP = 9000900;
    
            if ($request->isMethod('post') && $model->fill($request->all())->save()) {
                // Hapus data sebelumnya jika ada
                $wp = DatSubjekPajak::find($model->SUBJEK_PAJAK_ID);
                if (!is_null($wp)) {
                    $wp->delete();
                }
    
                $modelWp->fill($request->all());
                $modelWp->SUBJEK_PAJAK_ID = $model->SUBJEK_PAJAK_ID;
                $modelWp->save();
    
                return redirect()->route('spop.index', [
                    'KD_PROPINSI' => $model->KD_PROPINSI,
                    'KD_DATI2' => $model->KD_DATI2,
                    'KD_KECAMATAN' => $model->KD_KECAMATAN,
                    'KD_KELURAHAN' => $model->KD_KELURAHAN,
                    'KD_BLOK' => $model->KD_BLOK,
                    'NO_URUT' => $model->NO_URUT,
                    'KD_JNS_OP' => $model->KD_JNS_OP,
                ]);
            }
    
            $kelas['KELAS_BUMI'] = "-";
            $kelas['NJOP_BUMI'] = 0;
    
            return view('spop.create', [
                'model' => $model,
                'modelWp' => $modelWp,
                'propinsis' => $propinsis,
                'action' => 'add',
                'kelas' => $kelas,
            ]);
        
    
        // Respon berhasil atau alihkan pengguna ke halaman yang sesuai
        return redirect()->route('spop.index')
            ->with('success', 'SPOP berhasil ditambah.');
    }
    public function edit()
    {
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;


        $data_spop = DB::table('pbb.spop');
        // $data_spop->where('nop', $spop);
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

    public function show($NOP)
    {
        // Fetch user data
        $data_user = DB::table('users');
        $user = $data_user->where('id', Auth()->user()->id)->first();
        $fullname = $user->fullname;
        $username = $user->username;

        $KD_PROPINSI = substr($NOP, 0, 2);
        $KD_DATI2 = substr($NOP, 2, 2);
        $KD_KECAMATAN = substr($NOP, 4, 3);
        $KD_KELURAHAN = substr($NOP, 7, 3);
        $KD_BLOK = substr($NOP, 10, 3);
        $NO_URUT = substr($NOP, 13, 4);
        $KD_JNS_OP = substr($NOP, 17, 1);

        // Query menggunakan Query Builder
        $result = DB::table('spop')
            ->select('spop.*', DB::raw('SUM(dat_op_bangunan.LUAS_BNG) as LUAS_BNG'), DB::raw('COUNT(*) as JML_BNG'))
            ->leftJoin('dat_subjek_pajak', 'spop.SUBJEK_PAJAK_ID', '=', 'dat_subjek_pajak.SUBJEK_PAJAK_ID')
            ->leftJoin('dat_op_bangunan', function ($join) use ($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP) {
                $join->on('spop.KD_PROPINSI', '=', 'dat_op_bangunan.KD_PROPINSI')
                    ->on('spop.KD_DATI2', '=', 'dat_op_bangunan.KD_DATI2')
                    ->on('spop.KD_KECAMATAN', '=', 'dat_op_bangunan.KD_KECAMATAN')
                    ->on('spop.KD_KELURAHAN', '=', 'dat_op_bangunan.KD_KELURAHAN')
                    ->on('spop.KD_BLOK', '=', 'dat_op_bangunan.KD_BLOK')
                    ->on('spop.NO_URUT', '=', 'dat_op_bangunan.NO_URUT')
                    ->on('spop.KD_JNS_OP', '=', 'dat_op_bangunan.KD_JNS_OP');
            })
            ->where([
                'spop.KD_PROPINSI' => $KD_PROPINSI,
                'spop.KD_DATI2' => $KD_DATI2,
                'spop.KD_KECAMATAN' => $KD_KECAMATAN,
                'spop.KD_KELURAHAN' => $KD_KELURAHAN,
                'spop.KD_BLOK' => $KD_BLOK,
                'spop.NO_URUT' => $NO_URUT,
                'spop.KD_JNS_OP' => $KD_JNS_OP,
            ])
            ->groupBy('spop.KD_PROPINSI', 'spop.KD_DATI2', 'spop.KD_KECAMATAN', 'spop.KD_KELURAHAN', 'spop.KD_BLOK', 'spop.NO_URUT', 'spop.KD_JNS_OP')
            ->first(); // Ambil hanya satu record


        // Periksa apakah permintaan datang dari AJAX
        if (request()->ajax()) {
            // Jika ya, kirim respons JSON
            return response()->json($result);
        } else {
            // Jika tidak, tampilkan view HTML
            return view('spop.detail_spop', compact('fullname', 'username', 'result'));
        }
    }
}
