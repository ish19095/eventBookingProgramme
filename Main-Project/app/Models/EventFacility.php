<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventFacility
 * 
 * @property int $evtfac_id
 * @property int $evt_id
 * @property int $fac_id
 * @property int|null $evtfac_qty
 * 
 * @property Event $event
 * @property Facility $facility
 *
 * @package App\Models
 */
class EventFacility extends Model
{
	protected $table = 'event_facilities';
	protected $primaryKey = 'evtfac_id';
	public $timestamps = false;

	protected $casts = [
		'evt_id' => 'int',
		'fac_id' => 'int',
		'evtfac_qty' => 'int'
	];

	protected $fillable = [
		'evt_id',
		'fac_id',
		'evtfac_qty'
	];

	public function event()
	{
		return $this->belongsTo(Event::class, 'evt_id');
	}

	public function facility()
	{
		return $this->belongsTo(Facility::class, 'fac_id');
	}
}
