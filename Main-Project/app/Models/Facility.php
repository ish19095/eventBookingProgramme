<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Facility
 * 
 * @property int $fac_id
 * @property string $fac_name
 * @property bool|null $fac_isActive
 * @property int $fac_order
 * 
 * @property Collection|EventFacility[] $event_facilities
 *
 * @package App\Models
 */
class Facility extends Model
{
	protected $table = 'facility';
	protected $primaryKey = 'fac_id';
	public $timestamps = false;

	protected $casts = [
		'fac_isActive' => 'bool',
		'fac_order' => 'int'
	];

	protected $fillable = [
		'fac_name',
		'fac_isActive',
		'fac_order'
	];

	public function event_facilities()
	{
		return $this->hasMany(EventFacility::class, 'fac_id');
	}
}
