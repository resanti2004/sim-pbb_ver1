<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpopRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'kd_prov' => 'required',
            'kd_dati' => 'required',
            'kd_kec' => 'required',
            'kd_kel' => 'required',
            'kd_blok' => 'required',
            'no_urut' => 'required',
            'kd_jenis' => 'required',
            'kd_jenisTransaksi' => 'required|in:Perekaman Data,Pemutakhiran Data,Penghapusan Data',
            'no_spptLama' => 'required',
            'sbj_pajak' => 'required',
            'jalan_op' => 'required',
            'blok_kav' => 'required',
            'kel_op' => 'required',
            'rw_op' => 'required',
            'rt_op' => 'required',
            'kd_statusWp' => 'required|in:PEMILIK,PENYEWA,PENGELOLA,PEMAKAI,SENGKETA',
            'luas_bumi' => 'required|numeric',
            'kd_znt' => 'required',
            'jns_bumi' => 'required',
            'hsl_stmBumi' => 'required|numeric',
            'kd_provBersama' => 'required',
            'kd_datiBersama' => 'required',
            'kd_kecBersama' => 'required',
            'kd_kelBersama' => 'required',
            'kd_blokBersama' => 'required',
            'no_urutBersama' => 'required',
            'kd_jnsOpBersama' => 'required',
            'kd_provAsal' => 'required',
            'kd_datiAsal' => 'required',
            'kd_kecAsal' => 'required',
            'kd_kelAsal' => 'required',
            'kd_blokAsal' => 'required',
            'no_urutAsal' => 'required',
            'Kd_jenisOpAsal' => 'required',
            'tgl_pendataanOp' => 'required|date',
            'nm_pendataOp' => 'required',
            'nip_pendata' => 'required',
            'tgl_pemeriksaanOp' => 'required|date',
            'nm_pemeriksaOp' => 'required',
            'nip_pemeriksaOp' => 'required',
            'no_persil' => 'required',
        ];
    }
}

