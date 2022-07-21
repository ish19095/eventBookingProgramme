<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventAudience
 * 
 * @property int $aud_id
 * @property string|null $aud_code
 * @property string|null $aud_name
 * @property bool|null $aud_isActive
 * 
 * @property Collection|Event[] $events
 * @property Collection|EventType[] $event_types
 *
 * @package App\Models
 */
class EventAudience extends Model
{
	protected $table = 'event_audience';
	protected $primaryKey = 'aud_id';
	public $timestamps = false;

	protected $casts = [
		'aud_isActive' => 'bool'
	];

	protected $fillable = [
		'aud_code',
		'aud_name',
		'aud_isActive'
	];

	public function events()
	{
		return $this->hasMany(Event::class, 'aud_id');
	}

	public function event_types()
	{
		return $this->hasMany(EventType::class, 'aud_id');
	}
}
