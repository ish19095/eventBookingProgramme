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
 * @property int $schgr_id
 * @property string $schgr_name
 * @property bool|null $schgr_isActive
 * @property int $schgr_order
 * 
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class SchoolGrade extends Model
{
	protected $table = 'school_grade';
	protected $primaryKey = 'schgr_id';
	public $timestamps = false;

	protected $casts = [
		'schgr_isActive' => 'bool',
		'schgr_order' => 'int'
	];

	protected $fillable = [
		'schgr_name',
		'schgr_isActive',
		'schgr_order'
	];

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'schgr_id');
	}
}
