<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventType
 * 
 * @property int $evttyp_id
 * @property int $aud_id
 * @property string|null $evttyp_name
 * @property bool|null $evttyp_isActive
 * 
 * @property EventAudience $event_audience
 *
 * @package App\Models
 */
class EventType extends Model
{
	protected $table = 'event_type';
	protected $primaryKey = 'evttyp_id';
	public $timestamps = false;

	protected $casts = [
		'aud_id' => 'int',
		'evttyp_isActive' => 'bool'
	];

	protected $fillable = [
		'aud_id',
		'evttyp_name',
		'evttyp_isActive'
	];

	public function event_audience()
	{
		return $this->belongsTo(EventAudience::class, 'aud_id');
	}
}
