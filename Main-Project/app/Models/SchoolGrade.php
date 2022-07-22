<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SchoolGrade
 * 
 * @property int $schgrd_id
 * @property string $schgrd_name
 * @property bool|null $schgrd_isActive
 * @property int $schgrd_order
 * 
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class SchoolGrade extends Model
{
	protected $table = 'school_grade';
	protected $primaryKey = 'schgrd_id';
	public $timestamps = false;

	protected $casts = [
		'schgrd_isActive' => 'bool',
		'schgrd_order' => 'int'
	];

	protected $fillable = [
		'schgrd_name',
		'schgrd_isActive',
		'schgrd_order'
	];

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'schgrd_id');
	}
}
