<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventStatus
 * 
 * @property int $evtstat_id
 * @property string|null $evtstat_code
 * @property string|null $evtstat_description
 * @property bool|null $evtstat_isActive
 * 
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class EventStatus extends Model
{
	protected $table = 'event_status';
	protected $primaryKey = 'evtstat_id';
	public $timestamps = false;

	protected $casts = [
		'evtstat_isActive' => 'bool'
	];

	protected $fillable = [
		'evtstat_code',
		'evtstat_description',
		'evtstat_isActive'
	];

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'evtstat_id');
	}
}
