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
 * @property int $schfrm_id
 * @property string $schfrm_code
 * @property Carbon $schfrm_startDate
 * @property Carbon $schfrm_endDate
 * @property int $loc_id
 * @property int $schfrm_handler
 * @property int $sch_id
 * @property int $schgrd_id
 * @property string $schfrm_noOfStudent
 * @property string $schfrm_teacherName
 * @property string $schfrm_teacherNo
 * @property string $schfrm_teacherEmail
 * @property float|null $schfrm_donation
 * @property bool|null $schfrm_sales
 * @property int $evtstat_id
 * @property bool|null $schfrm_isActive
 * @property int $schfrm_order
 * 
 * @property Location $location
 * @property User $user
 * @property School $school
 * @property SchoolGrade $school_grade
 * @property EventStatus $event_status
 *
 * @package App\Models
 */
class SchoolForm extends Model
{
	protected $table = 'school_form';
	protected $primaryKey = 'schfrm_id';
	public $timestamps = false;

	protected $casts = [
		'loc_id' => 'int',
		'schfrm_handler' => 'int',
		'sch_id' => 'int',
		'schgrd_id' => 'int',
		'schfrm_donation' => 'float',
		'schfrm_sales' => 'bool',
		'evtstat_id' => 'int',
		'schfrm_isActive' => 'bool',
		'schfrm_order' => 'int'
	];

	protected $dates = [
		'schfrm_startDate',
		'schfrm_endDate'
	];

	protected $fillable = [
		'schfrm_code',
		'schfrm_startDate',
		'schfrm_endDate',
		'loc_id',
		'schfrm_handler',
		'sch_id',
		'schgrd_id',
		'schfrm_noOfStudent',
		'schfrm_teacherName',
		'schfrm_teacherNo',
		'schfrm_teacherEmail',
		'schfrm_donation',
		'schfrm_sales',
		'evtstat_id',
		'schfrm_isActive',
		'schfrm_order'
	];

	public function location()
	{
		return $this->belongsTo(Location::class, 'loc_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'schfrm_handler');
	}

	public function school()
	{
		return $this->belongsTo(School::class, 'sch_id');
	}

	public function school_grade()
	{
		return $this->belongsTo(SchoolGrade::class, 'schgrd_id');
	}

	public function event_status()
	{
		return $this->belongsTo(EventStatus::class, 'evtstat_id');
	}
}
