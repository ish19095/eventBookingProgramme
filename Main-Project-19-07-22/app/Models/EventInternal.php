<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventInternal extends Model
{
    use HasFactory;

    protected $table = 'internal_events';
    protected $primaryKey = 'int_id';

    protected $fillable = ['internal_event_date_from', 'internal_event_date_to', 'internal_event_time_from', 
    'internal_event_time_to', 'internal_event_name', 'internal_event_desc', 'internal_event_all_day', 
    'internal_event_site', 'internal_event_type', 'internal_event_dept', 'internal_event_staff_member', 
    'internal_event_other_member', 'internal_event_req'];
}
