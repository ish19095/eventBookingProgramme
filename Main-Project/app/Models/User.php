<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $usr_id
 * @property string $usr_email
 * @property bool|null $usr_isActive
 * @property int $dep_id
 * 
 * @property Department $department
 * @property Collection|Department[] $departments
 * @property Collection|Event[] $events
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'usr_id';
	public $timestamps = false;

	protected $casts = [
		'usr_isActive' => 'bool',
		'dep_id' => 'int'
	];

	protected $fillable = [
		'usr_email',
		'usr_isActive',
		'dep_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'dep_id');
	}

	public function departments()
	{
		return $this->hasMany(Department::class, 'dep_owner');
	}

	public function events()
	{
		return $this->hasMany(Event::class, 'evt_owner');
	}

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'sch_handler');
	}
}
