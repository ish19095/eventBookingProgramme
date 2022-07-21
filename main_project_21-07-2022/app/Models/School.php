<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'school_form';
    protected $primaryKey = 'sch_id';

    protected $fillable = ['sch_startDate', 'sch_endDate', 'loc_id', 'sch_handler', 
    'schnm_id', 'schgr_id', 'sch_noOfStudent', 'sch_teacherName', 
    'sch_teacherNo', 'sch_teacherEmail', 'sch_donation', 
    'sch_sales', 'sch_isActive', 'sch_order'];
}
