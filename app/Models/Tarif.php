<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarif
 * 
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $THN_AWAL
 * @property string $THN_AKHIR
 * @property float $NJOP_MIN
 * @property float|null $NJOP_MAX
 * @property float|null $NILAI_TARIF
 *
 * @package App\Models
 */
class Tarif extends Model
{
	protected $table = 'tarif';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NJOP_MIN' => 'float',
		'NJOP_MAX' => 'float',
		'NILAI_TARIF' => 'float'
	];

	protected $fillable = [
		'NJOP_MAX',
		'NILAI_TARIF'
	];
}
