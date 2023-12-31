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
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $request->validate([
            'KD_PROPINSI' => 'required|string|max:2',
            'KD_DATI2' => 'required|string|max:2',
            'KD_KECAMATAN' => 'required|string|max:3',
            'KD_KELURAHAN' => 'required|string|max:3',
            'KD_BLOK' => 'required|string|max:3',
            'NO_URUT' => 'required|string|max:4',
            'KD_JNS_OP' => 'required|string|max:1',
            'SUBJEK_PAJAK_ID' => 'required|string|max:30',
            'JNS_TRANSAKSI_OP' => 'required|string|max:1',
            'JALAN_OP' => 'required|string|max:30',
            'KD_STATUS_WP' => 'required|string|max:1',
            'LUAS_BUMI' => 'required|integer',
            'JNS_BUMI' => 'required|string|max:1',
            'TGL_PENDATAAN_OP' => 'required|date',
            'TGL_PEMERIKSAAN_OP' => 'required|date',
            'KD_PROPINSI_BERSAMA' => 'nullable|string|max:2',
            'KD_DATI2_BERSAMA' => 'nullable|string|max:2',
            'KD_KECAMATAN_BERSAMA' => 'nullable|string|max:3',
            'KD_KELURAHAN_BERSAMA' => 'nullable|string|max:3',
            'KD_BLOK_BERSAMA' => 'nullable|string|max:3',
            'NO_URUT_BERSAMA' => 'nullable|string|max:4',
            'KD_JNS_OP_BERSAMA' => 'nullable|string|max:1',
            'KD_PROPINSI_ASAL' => 'nullable|string|max:2',
            'KD_DATI2_ASAL' => 'nullable|string|max:2',
            'KD_KECAMATAN_ASAL' => 'nullable|string|max:3',
            'KD_KELURAHAN_ASAL' => 'nullable|string|max:3',
            'KD_BLOK_ASAL' => 'nullable|string|max:3',
            'NO_URUT_ASAL' => 'nullable|string|max:4',
            'KD_JNS_OP_ASAL' => 'nullable|string|max:1',
            'NO_SPPT_LAMA' => 'nullable|string|max:30',
            'RW_OP' => 'nullable|string|max:2',
            'RT_OP' => 'nullable|string|max:3',
            'KD_ZNT' => 'nullable|string|max:2',
            'NO_FORMULIR_SPOP' => 'nullable|string|max:11',
            'BLOK_KAV_NO_OP' => 'nullable|string|max:15',
            'NIP_PENDATA' => 'nullable|string|max:20',
            'NIP_PEMERIKSA_OP' => 'nullable|string|max:20',
            'NO_PERSIL' => 'nullable|string|max:5',
            'NO_URUT' => 'nullable|string|max:4',
            'NO_URUT_BERSAMA' => 'nullable|string|max:4',
            'NO_URUT_ASAL' => 'nullable|string|max:4',
            'NO_SPPT_LAMA' => 'nullable|string|max:30',
            'NOP' => 'nullable|string|max:18',
        ]);

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

    public function destroy($spop)
    {

        $KD_PROPINSI = substr($spop, 0, 2);
        $KD_DATI2 = substr($spop, 2, 2);
        $KD_KECAMATAN = substr($spop, 4, 3);
        $KD_KELURAHAN = substr($spop, 7, 3);
        $KD_BLOK = substr($spop, 10, 3);
        $NO_URUT = substr($spop, 13, 4);
        $KD_JNS_OP = substr($spop, 17, 1);

        try {
            $deleted = $this->findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP);
            $deleted->delete();

            return redirect()->route('spop.index')->with('success', 'Data berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('spop.index')->with('error', 'Data tidak ditemukan.');
        }
    }

    protected function findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP)
    {
        try {

            $got = Spop::where([
                'KD_PROPINSI' => $KD_PROPINSI,
                'KD_DATI2' => $KD_DATI2,
                'KD_KECAMATAN' => $KD_KECAMATAN,
                'KD_KELURAHAN' => $KD_KELURAHAN,
                'KD_BLOK' => $KD_BLOK,
                'NO_URUT' => $NO_URUT,
                'KD_JNS_OP' => $KD_JNS_OP,
            ])->firstOrFail();

            return $got;
        } catch (ModelNotFoundException $e) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findModelWp($SUBJEK_PAJAK_ID)
    {
        $model_wp = DatSubjekPajak::where('SUBJEK_PAJAK_ID', $SUBJEK_PAJAK_ID)->first();

        if ($model_wp) {
            return $model_wp;
        }

        abort(404, 'The requested page does not exist.');
    }


    public function update($spop)
    {
        $KD_PROPINSI = substr($spop, 0, 2);
        $KD_DATI2 = substr($spop, 2, 2);
        $KD_KECAMATAN = substr($spop, 4, 3);
        $KD_KELURAHAN = substr($spop, 7, 3);
        $KD_BLOK = substr($spop, 10, 3);
        $NO_URUT = substr($spop, 13, 4);
        $KD_JNS_OP = substr($spop, 17, 1);

        $model = $this->findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP);
        $model_wp = $this->findModelWp($model->SUBJEK_PAJAK_ID);

        $propinsis = RefPropinsi::pluck('NM_PROPINSI', 'KD_PROPINSI');

        if (
            $model->fill(request()->input()) && $model->save() &&
            $model_wp->fill(request()->input()) && $model_wp->save()
        ) {
            return redirect()->route('view', [
                'KD_PROPINSI' => $model->KD_PROPINSI,
                'KD_DATI2' => $model->KD_DATI2,
                'KD_KECAMATAN' => $model->KD_KECAMATAN,
                'KD_KELURAHAN' => $model->KD_KELURAHAN,
                'KD_BLOK' => $model->KD_BLOK,
                'NO_URUT' => $model->NO_URUT,
                'KD_JNS_OP' => $model->KD_JNS_OP,
            ]);
        }

        $kelas = DB::select(
            "
        SELECT KELAS_BUMI, NJOP_BUMI FROM kelas_bumi WHERE :nilai_sistem / :luas BETWEEN NILAI_MINIMUM+0.01 AND NILAI_MAKSIMUM",
            [':nilai_sistem' => $model->NILAI_SISTEM_BUMI, ':luas' => $model->LUAS_BUMI]
        )[0];

        return view('update', [
            'model' => $model,
            'model_wp' => $model_wp,
            'propinsis' => $propinsis,
            'action' => 'edit',
            'kelas' => $kelas,
        ]);
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

            // dd($result);

            // Jika tidak, tampilkan view HTML
            return view('spop.detail_spop', compact('fullname', 'username', 'result'));
        }
    }
}
