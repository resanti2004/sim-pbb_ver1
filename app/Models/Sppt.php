<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sppt
 * 
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property string $THN_PAJAK_SPPT
 * @property int|null $SIKLUS_SPPT
 * @property string|null $KD_KANWIL_BANK
 * @property string|null $KD_KPPBB_BANK
 * @property string|null $KD_BANK_TUNGGAL
 * @property string|null $KD_BANK_PERSEPSI
 * @property string|null $KD_TP
 * @property string|null $NM_WP_SPPT
 * @property string|null $JLN_WP_SPPT
 * @property string|null $BLOK_KAV_NO_WP_SPPT
 * @property string|null $RW_WP_SPPT
 * @property string|null $RT_WP_SPPT
 * @property string|null $KELURAHAN_WP_SPPT
 * @property string|null $KOTA_WP_SPPT
 * @property string|null $KD_POS_WP_SPPT
 * @property string|null $NPWP_SPPT
 * @property string|null $NO_PERSIL_SPPT
 * @property string|null $KD_KLS_TANAH
 * @property Carbon|null $THN_AWAL_KLS_TANAH
 * @property string|null $KD_KLS_BNG
 * @property Carbon|null $THN_AWAL_KLS_BNG
 * @property Carbon|null $TGL_JATUH_TEMPO_SPPT
 * @property int $LUAS_BUMI_SPPT
 * @property int $LUAS_BNG_SPPT
 * @property int $NJOP_BUMI_SPPT
 * @property int $NJOP_BNG_SPPT
 * @property int $NJOP_SPPT
 * @property int $NJOPTKP_SPPT
 * @property int $NJKP_SPPT
 * @property int $PBB_TERHUTANG_SPPT
 * @property int $FAKTOR_PENGURANG_SPPT
 * @property int $PBB_YG_HARUS_DIBAYAR_SPPT
 * @property bool|null $STATUS_PEMBAYARAN_SPPT
 * @property bool|null $STATUS_TAGIHAN_SPPT
 * @property bool|null $STATUS_CETAK_SPPT
 * @property Carbon|null $TGL_TERBIT_SPPT
 * @property Carbon|null $TGL_CETAK_SPPT
 * @property string|null $NIP_PENCETAK_SPPT
 *
 * @package App\Models
 */
class Sppt extends Model
{
	protected $table = 'sppt';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SIKLUS_SPPT' => 'int',
		'THN_AWAL_KLS_TANAH' => 'datetime',
		'THN_AWAL_KLS_BNG' => 'datetime',
		'TGL_JATUH_TEMPO_SPPT' => 'datetime',
		'LUAS_BUMI_SPPT' => 'int',
		'LUAS_BNG_SPPT' => 'int',
		'NJOP_BUMI_SPPT' => 'int',
		'NJOP_BNG_SPPT' => 'int',
		'NJOP_SPPT' => 'int',
		'NJOPTKP_SPPT' => 'int',
		'NJKP_SPPT' => 'int',
		'PBB_TERHUTANG_SPPT' => 'int',
		'FAKTOR_PENGURANG_SPPT' => 'int',
		'PBB_YG_HARUS_DIBAYAR_SPPT' => 'int',
		'STATUS_PEMBAYARAN_SPPT' => 'bool',
		'STATUS_TAGIHAN_SPPT' => 'bool',
		'STATUS_CETAK_SPPT' => 'bool',
		'TGL_TERBIT_SPPT' => 'datetime',
		'TGL_CETAK_SPPT' => 'datetime'
	];

	protected $fillable = [
		'SIKLUS_SPPT',
		'KD_KANWIL_BANK',
		'KD_KPPBB_BANK',
		'KD_BANK_TUNGGAL',
		'KD_BANK_PERSEPSI',
		'KD_TP',
		'NM_WP_SPPT',
		'JLN_WP_SPPT',
		'BLOK_KAV_NO_WP_SPPT',
		'RW_WP_SPPT',
		'RT_WP_SPPT',
		'KELURAHAN_WP_SPPT',
		'KOTA_WP_SPPT',
		'KD_POS_WP_SPPT',
		'NPWP_SPPT',
		'NO_PERSIL_SPPT',
		'KD_KLS_TANAH',
		'THN_AWAL_KLS_TANAH',
		'KD_KLS_BNG',
		'THN_AWAL_KLS_BNG',
		'TGL_JATUH_TEMPO_SPPT',
		'LUAS_BUMI_SPPT',
		'LUAS_BNG_SPPT',
		'NJOP_BUMI_SPPT',
		'NJOP_BNG_SPPT',
		'NJOP_SPPT',
		'NJOPTKP_SPPT',
		'NJKP_SPPT',
		'PBB_TERHUTANG_SPPT',
		'FAKTOR_PENGURANG_SPPT',
		'PBB_YG_HARUS_DIBAYAR_SPPT',
		'STATUS_PEMBAYARAN_SPPT',
		'STATUS_TAGIHAN_SPPT',
		'STATUS_CETAK_SPPT',
		'TGL_TERBIT_SPPT',
		'TGL_CETAK_SPPT',
		'NIP_PENCETAK_SPPT'
	];
}
