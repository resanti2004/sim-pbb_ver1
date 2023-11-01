<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Spop
 * 
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property string $SUBJEK_PAJAK_ID
 * @property string|null $NO_FORMULIR_SPOP
 * @property string $JNS_TRANSAKSI_OP
 * @property string|null $KD_PROPINSI_BERSAMA
 * @property string|null $KD_DATI2_BERSAMA
 * @property string|null $KD_KECAMATAN_BERSAMA
 * @property string|null $KD_KELURAHAN_BERSAMA
 * @property string|null $KD_BLOK_BERSAMA
 * @property string|null $NO_URUT_BERSAMA
 * @property string|null $KD_JNS_OP_BERSAMA
 * @property string|null $KD_PROPINSI_ASAL
 * @property string|null $KD_DATI2_ASAL
 * @property string|null $KD_KECAMATAN_ASAL
 * @property string|null $KD_KELURAHAN_ASAL
 * @property string|null $KD_BLOK_ASAL
 * @property string|null $NO_URUT_ASAL
 * @property string|null $KD_JNS_OP_ASAL
 * @property string|null $NO_SPPT_LAMA
 * @property string $JALAN_OP
 * @property string|null $BLOK_KAV_NO_OP
 * @property string|null $KELURAHAN_OP
 * @property string|null $RW_OP
 * @property string|null $RT_OP
 * @property string $KD_STATUS_WP
 * @property int $LUAS_BUMI
 * @property string|null $KD_ZNT
 * @property string $JNS_BUMI
 * @property int $NILAI_SISTEM_BUMI
 * @property Carbon $TGL_PENDATAAN_OP
 * @property string|null $NM_PENDATAAN_OP
 * @property string|null $NIP_PENDATA
 * @property Carbon $TGL_PEMERIKSAAN_OP
 * @property string|null $NM_PEMERIKSAAN_OP
 * @property string|null $NIP_PEMERIKSA_OP
 * @property string|null $NO_PERSIL
 *
 * @package App\Models
 */
class Spop extends Model
{
	protected $table = 'spop';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LUAS_BUMI' => 'int',
		'NILAI_SISTEM_BUMI' => 'int',
		'TGL_PENDATAAN_OP' => 'datetime',
		'TGL_PEMERIKSAAN_OP' => 'datetime'
	];

	protected $fillable = [
		'SUBJEK_PAJAK_ID',
		'NO_FORMULIR_SPOP',
		'JNS_TRANSAKSI_OP',
		'KD_PROPINSI_BERSAMA',
		'KD_DATI2_BERSAMA',
		'KD_KECAMATAN_BERSAMA',
		'KD_KELURAHAN_BERSAMA',
		'KD_BLOK_BERSAMA',
		'NO_URUT',
		'NO_URUT_BERSAMA',
		'KD_JNS_OP_BERSAMA',
		'KD_PROPINSI_ASAL',
		'KD_DATI2_ASAL',
		'KD_KECAMATAN_ASAL',
		'KD_KELURAHAN_ASAL',
		'KD_BLOK_ASAL',
		'NO_URUT_ASAL',
		'KD_JNS_OP_ASAL',
		'NO_SPPT_LAMA',
		'JALAN_OP',
		'BLOK_KAV_NO_OP',
		'KELURAHAN_OP',
		'RW_OP',
		'RT_OP',
		'KD_STATUS_WP',
		'LUAS_BUMI',
		'KD_ZNT',
		'JNS_BUMI',
		'NILAI_SISTEM_BUMI',
		'TGL_PENDATAAN_OP',
		'NM_PENDATAAN_OP',
		'NIP_PENDATA',
		'TGL_PEMERIKSAAN_OP',
		'NM_PEMERIKSAAN_OP',
		'NIP_PEMERIKSA_OP',
		'NO_PERSIL'
	];
}
