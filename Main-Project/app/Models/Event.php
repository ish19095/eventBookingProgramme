<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $evt_id
 * @property int $aud_id
 * @property int $loc_id
 * @property int $dep_id
 * @property int|null $secdep_id
 * @property int|null $tertdep_id
 * @property int $evt_owner
 * @property string|null $evt_name
 * @property string|null $evt_description
 * @property Carbon $evt_startDate
 * @property Carbon $evt_endDate
 * @property int|null $evt_anticipatedParticipant
 * @property float|null $evt_fee
 * @property float|null $evt_paymentAmount
 * @property int|null $paymet_id
 * @property string|null $evt_invoiceno
 * @property bool|null $evt_payconf
 * @property int|null $evt_actpartic_total
 * @property int|null $evt_actpartic_memb
 * @property float|null $evt_income
 * @property bool|null $evt_sales
 * @property int|null $evt_membs_ads
 * @property int|null $evt_membs_chl
 * @property string|null $evt_feedback
 * @property string|null $evt_compName
 * @property string|null $evt_compContactPersonName
 * @property string|null $evt_compContactPersonEmail
 * @property string|null $evt_compContactPersonTel
 * @property string|null $evt_compVATNo
 * @property int $evt_createdBy
 * @property Carbon $evt_createdDate
 * @property int $evt_lastUpdatedBy
 * @property Carbon $evt_lastUpdatedDate
 * 
 * @property EventAudience $event_audience
 * @property Location $location
 * @property Department|null $department
 * @property User $user
 * @property Paymentmethod|null $paymentmethod
 * @property Collection|EventFacility[] $event_facilities
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'event';
	protected $primaryKey = 'evt_id';
	public $timestamps = false;

	protected $casts = [
		'aud_id' => 'int',
		'loc_id' => 'int',
		'dep_id' => 'int',
		'secdep_id' => 'int',
		'tertdep_id' => 'int',
		'evt_owner' => 'int',
		'evt_anticipatedParticipant' => 'int',
		'evt_fee' => 'float',
		'evt_paymentAmount' => 'float',
		'paymet_id' => 'int',
		'evt_payconf' => 'bool',
		'evt_actpartic_total' => 'int',
		'evt_actpartic_memb' => 'int',
		'evt_income' => 'float',
		'evt_sales' => 'bool',
		'evt_membs_ads' => 'int',
		'evt_membs_chl' => 'int',
		'evt_createdBy' => 'int',
		'evt_lastUpdatedBy' => 'int'
	];

	protected $dates = [
		'evt_startDate',
		'evt_endDate',
		'evt_createdDate',
		'evt_lastUpdatedDate'
	];

	protected $fillable = [
		'aud_id',
		'loc_id',
		'dep_id',
		'secdep_id',
		'tertdep_id',
		'evt_owner',
		'evt_name',
		'evt_description',
		'evt_startDate',
		'evt_endDate',
		'evt_anticipatedParticipant',
		'evt_fee',
		'evt_paymentAmount',
		'paymet_id',
		'evt_invoiceno',
		'evt_payconf',
		'evt_actpartic_total',
		'evt_actpartic_memb',
		'evt_income',
		'evt_sales',
		'evt_membs_ads',
		'evt_membs_chl',
		'evt_feedback',
		'evt_compName',
		'evt_compContactPersonName',
		'evt_compContactPersonEmail',
		'evt_compContactPersonTel',
		'evt_compVATNo',
		'evt_createdBy',
		'evt_createdDate',
		'evt_lastUpdatedBy',
		'evt_lastUpdatedDate'
	];

	public function event_audience()
	{
		return $this->belongsTo(EventAudience::class, 'aud_id');
	}

	public function location()
	{
		return $this->belongsTo(Location::class, 'loc_id');
	}

	public function department()
	{
		return $this->belongsTo(Department::class, 'tertdep_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'evt_owner');
	}

	public function paymentmethod()
	{
		return $this->belongsTo(Paymentmethod::class, 'paymet_id');
	}

	public function event_facilities()
	{
		return $this->hasMany(EventFacility::class, 'evt_id');
	}
}
