<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PembayaranSppt
 * 
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property string $THN_PAJAK_SPPT
 * @property int $PEMBAYARAN_SPPT_KE
 * @property string $KD_KANWIL_BANK
 * @property string $KD_KPPBB_BANK
 * @property string $KD_BANK_TUNGGAL
 * @property string $KD_BANK_PERSEPSI
 * @property string $KD_TP
 * @property int|null $DENDA_SPPT
 * @property int $JML_SPPT_YG_DIBAYAR
 * @property Carbon|null $TGL_PEMBAYARAN_SPPT
 * @property Carbon $TGL_REKAM_BYR_SPPT
 * @property string $NIP_REKAM_BYR_SPPT
 * @property string|null $NO_BUKTI
 *
 * @package App\Models
 */
class PembayaranSppt extends Model
{
	protected $table = 'pembayaran_sppt';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PEMBAYARAN_SPPT_KE' => 'int',
		'DENDA_SPPT' => 'int',
		'JML_SPPT_YG_DIBAYAR' => 'int',
		'TGL_PEMBAYARAN_SPPT' => 'datetime',
		'TGL_REKAM_BYR_SPPT' => 'datetime'
	];

	protected $fillable = [
		'DENDA_SPPT',
		'JML_SPPT_YG_DIBAYAR',
		'TGL_PEMBAYARAN_SPPT',
		'TGL_REKAM_BYR_SPPT',
		'NIP_REKAM_BYR_SPPT',
		'NO_BUKTI'
	];
}
