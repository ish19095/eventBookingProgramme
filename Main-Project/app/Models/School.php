<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'schools';
    protected $primaryKey = 'school_id';

    protected $fillable = ['school_id', 'school_event_date', 'school_event_site', 'school_event_time_from', 
    'school_event_time_to', 'school_event_staff_member', 'school_event_school_name', 'school_event_school_year', 
    'school_event_num_students', 'school_event_teacher_name', 'school_event_teacher_number', 
    'school_event_teacher_email', 'school_event_donation', 'school_event_sales'];
}
