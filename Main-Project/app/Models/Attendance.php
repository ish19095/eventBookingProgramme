<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';
    protected $primaryKey = 'attend_id';

    protected $fillable = ['leave_date_from', 'leave_date_to', 'leave_time_from', 'leave_time_to'];
}
