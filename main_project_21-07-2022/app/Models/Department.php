<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property int $dep_id
 * @property string|null $dep_code
 * @property string|null $dep_name
 * @property int $dep_owner
 * 
 * @property User $user
 * @property Collection|Event[] $events
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'department';
	protected $primaryKey = 'dep_id';
	public $timestamps = false;

	protected $casts = [
		'dep_owner' => 'int'
	];

	protected $fillable = [
		'dep_code',
		'dep_name',
		'dep_owner'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'dep_owner');
	}

	public function events()
	{
		return $this->hasMany(Event::class, 'tertdep_id');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'dep_id');
	}
}
