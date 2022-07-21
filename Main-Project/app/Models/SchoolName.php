<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SchoolName
 * 
 * @property int $schnm_id
 * @property string $schnm_name
 * @property bool|null $schnm_isActive
 * @property int $schnm_order
 * 
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class SchoolName extends Model
{
	protected $table = 'school_name';
	protected $primaryKey = 'schnm_id';
	public $timestamps = false;

	protected $casts = [
		'schnm_isActive' => 'bool',
		'schnm_order' => 'int'
	];

	protected $fillable = [
		'schnm_name',
		'schnm_isActive',
		'schnm_order'
	];

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'schnm_id');
	}
}
