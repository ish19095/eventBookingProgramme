<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 * 
 * @property int $loc_id
 * @property string $loc_name
 * @property string $loc_code
 * @property string|null $loc_address
 * @property float|null $loc_lat
 * @property float|null $loc_lon
 * @property bool|null $loc_isActive
 * @property int $loc_order
 * 
 * @property Collection|Event[] $events
 * @property Collection|SchoolForm[] $school_forms
 *
 * @package App\Models
 */
class Location extends Model
{
	protected $table = 'location';
	protected $primaryKey = 'loc_id';
	public $timestamps = false;

	protected $casts = [
		'loc_lat' => 'float',
		'loc_lon' => 'float',
		'loc_isActive' => 'bool',
		'loc_order' => 'int'
	];

	protected $fillable = [
		'loc_name',
		'loc_code',
		'loc_address',
		'loc_lat',
		'loc_lon',
		'loc_isActive',
		'loc_order'
	];

	public function events()
	{
		return $this->hasMany(Event::class, 'loc_id');
	}

	public function school_forms()
	{
		return $this->hasMany(SchoolForm::class, 'loc_id');
	}
}
