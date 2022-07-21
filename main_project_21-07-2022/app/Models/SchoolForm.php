<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SchoolForm
 * 
 * @property int $sch_id
 * @property Carbon $sch_startDate
 * @property Carbon $sch_endDate
 * @property int $loc_id
 * @property int $sch_handler
 * @property int $schnm_id
 * @property int $schgr_id
 * @property string $sch_noOfStudent
 * @property string $sch_teacherName
 * @property string $sch_teacherNo
 * @property string $sch_teacherEmail
 * @property float $sch_donation
 * @property bool $sch_sales
 * @property bool|null $sch_isActive
 * @property int $sch_order
 * 
 * @property Location $location
 * @property User $user
 * @property SchoolName $school_name
 * @property SchoolGrade $school_grade
 *
 * @package App\Models
 */
class SchoolForm extends Model
{
	protected $table = 'school_form';
	protected $primaryKey = 'sch_id';
	public $timestamps = false;

	protected $casts = [
		'loc_id' => 'int',
		'sch_handler' => 'int',
		'schnm_id' => 'int',
		'schgr_id' => 'int',
		'sch_donation' => 'float',
		'sch_sales' => 'bool',
		'sch_isActive' => 'bool',
		'sch_order' => 'int'
	];

	protected $dates = [
		'sch_startDate',
		'sch_endDate'
	];

	protected $fillable = [
		'sch_startDate',
		'sch_endDate',
		'loc_id',
		'sch_handler',
		'schnm_id',
		'schgr_id',
		'sch_noOfStudent',
		'sch_teacherName',
		'sch_teacherNo',
		'sch_teacherEmail',
		'sch_donation',
		'sch_sales',
		'sch_isActive',
		'sch_order'
	];

	public function location()
	{
		return $this->belongsTo(Location::class, 'loc_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'sch_handler');
	}

	public function school_name()
	{
		return $this->belongsTo(SchoolName::class, 'schnm_id');
	}

	public function school_grade()
	{
		return $this->belongsTo(SchoolGrade::class, 'schgr_id');
	}
}
