<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paymentmethod
 * 
 * @property int $paymet_id
 * @property string $paymet_name
 * @property bool $paymet_isActive
 * 
 * @property Collection|Event[] $events
 *
 * @package App\Models
 */
class Paymentmethod extends Model
{
	protected $table = 'paymentmethod';
	protected $primaryKey = 'paymet_id';
	public $timestamps = false;

	protected $casts = [
		'paymet_isActive' => 'bool'
	];

	protected $fillable = [
		'paymet_name',
		'paymet_isActive'
	];

	public function events()
	{
		return $this->hasMany(Event::class, 'paymet_id');
	}
}
