<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PelayananDokuman
 * 
 * @property int $pelayanan_id
 * @property int $dokumen_id
 *
 * @package App\Models
 */
class PelayananDokuman extends Model
{
	protected $table = 'pelayanan_dokumen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pelayanan_id' => 'int',
		'dokumen_id' => 'int'
	];
}
