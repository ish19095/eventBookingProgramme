<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventExternal extends Model
{
    use HasFactory;

    protected $table = 'external_events';
    protected $primaryKey = 'ext_id';

    protected $fillable = ['external_event_date', 'external_event_time_from', 'external_event_time_to', 
    'external_event_site', 'external_event_BLM', 'external_event_type', 'external_expected_participants', 
    'external_event_type_participant', 'external_event_main_dept', 'external_event_sec_dept',
    'external_event_third_dept', 'internal_event_staff_member', 'internal_event_other_member', 'external_event_fee',
    'external_event_company_name', 'external_event_contact_person', 'external_event_contact_email', 
    'external_event_contact_number', 'external_event_vat', 'external_event_req', 'external_event_payment_amount',
    'external_event_payment', 'external_actual_participants', 'external_blm_members', 'external_event_income', 
    'external_event_sales', 'external_event_member', ];
}
