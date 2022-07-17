<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'school';
    protected $primaryKey = 'school_id';

    protected $fillable = ['school_id', 'date', 'site', 'time_from', 'time_to', 'staff_handler', 
    'school_name', 'school_year', 'num_students', 'teacher_name', 'teacher_number', 'teacher_email', 
    'donation', 'recipt_number', 'sales'];
}
