<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelayanan
 * 
 * @property int $ID
 * @property string|null $NAMA_PEMOHON
 * @property string|null $ALAMAT_PEMOHON
 * @property string|null $LETAK_OP
 * @property string|null $KECAMATAN
 * @property string|null $KELURAHAN
 * @property string|null $NO_PELAYANAN
 * @property Carbon|null $TANGGAL_PELAYANAN
 * @property string|null $KD_PROPINSI
 * @property string|null $KD_DATI2
 * @property string|null $KD_KECAMATAN
 * @property string|null $KD_KELURAHAN
 * @property string|null $KD_BLOK
 * @property string|null $NO_URUT
 * @property string|null $KD_JNS_OP
 * @property string|null $KD_JNS_PELAYANAN
 * @property Carbon|null $TANGGAL_PERKIRAAN_SELESAI
 * @property int|null $STATUS_PELAYANAN
 * @property string|null $NIP_PETUGAS_PENERIMA
 * @property string|null $NAMA_PETUGAS_PENERIMA
 * @property string|null $NIP_AR
 * @property string|null $NAMA_AR
 * @property string|null $CATATAN
 * @property string|null $KETERANGAN
 * @property Carbon|null $TGL_MASUK_PENILAI
 * @property string|null $NIP_MASUK_PENILAI
 * @property Carbon|null $TGL_SELESAI
 * @property string|null $NIP_SELESAI
 * @property Carbon|null $TGL_TERKONFIRMASI_WP
 * @property string|null $NIP_TERKONFIRMASI_WP
 * @property Carbon|null $TGL_PENETAPAN
 * @property string|null $NIP_PENETAPAN
 * @property Carbon|null $TGL_BERKAS_DITUNDA
 * @property string|null $NIP_BERKAS_DITUNDA
 * @property string|null $TTD_JABATAN_KIRI
 * @property string|null $TTD_NAMA_KIRI
 * @property string|null $TTD_NIP_KIRI
 * @property string|null $TTD_JABATAN_KANAN
 * @property string|null $TTD_NAMA_KANAN
 * @property string|null $TTD_NIP_KANAN
 * @property string|null $KETERANGAN_BERKAS
 *
 * @package App\Models
 */
class Pelayanan extends Model
{
	protected $table = 'pelayanan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'TANGGAL_PELAYANAN' => 'datetime',
		'TANGGAL_PERKIRAAN_SELESAI' => 'datetime',
		'STATUS_PELAYANAN' => 'int',
		'TGL_MASUK_PENILAI' => 'datetime',
		'TGL_SELESAI' => 'datetime',
		'TGL_TERKONFIRMASI_WP' => 'datetime',
		'TGL_PENETAPAN' => 'datetime',
		'TGL_BERKAS_DITUNDA' => 'datetime'
	];

	protected $fillable = [
		'ID',
		'NAMA_PEMOHON',
		'ALAMAT_PEMOHON',
		'LETAK_OP',
		'KECAMATAN',
		'KELURAHAN',
		'NO_PELAYANAN',
		'TANGGAL_PELAYANAN',
		'KD_PROPINSI',
		'KD_DATI2',
		'KD_KECAMATAN',
		'KD_KELURAHAN',
		'KD_BLOK',
		'NO_URUT',
		'KD_JNS_OP',
		'KD_JNS_PELAYANAN',
		'TANGGAL_PERKIRAAN_SELESAI',
		'STATUS_PELAYANAN',
		'NIP_PETUGAS_PENERIMA',
		'NAMA_PETUGAS_PENERIMA',
		'NIP_AR',
		'NAMA_AR',
		'CATATAN',
		'KETERANGAN',
		'TGL_MASUK_PENILAI',
		'NIP_MASUK_PENILAI',
		'TGL_SELESAI',
		'NIP_SELESAI',
		'TGL_TERKONFIRMASI_WP',
		'NIP_TERKONFIRMASI_WP',
		'TGL_PENETAPAN',
		'NIP_PENETAPAN',
		'TGL_BERKAS_DITUNDA',
		'NIP_BERKAS_DITUNDA',
		'TTD_JABATAN_KIRI',
		'TTD_NAMA_KIRI',
		'TTD_NIP_KIRI',
		'TTD_JABATAN_KANAN',
		'TTD_NAMA_KANAN',
		'TTD_NIP_KANAN',
		'KETERANGAN_BERKAS'
	];
}
