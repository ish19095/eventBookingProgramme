<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class School
 * 
 * @property int $sch_id
 * @property string $sch_name
 * @property bool|null $sch_isActive
 * @property int $sch_order
 * 
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class School extends Model
{
	protected $table = 'school';
	protected $primaryKey = 'sch_id';
	public $timestamps = false;

	protected $casts = [
		'sch_isActive' => 'bool',
		'sch_order' => 'int'
	];

	protected $fillable = [
		'sch_name',
		'sch_isActive',
		'sch_order'
	];

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'sch_id');
	}
}
