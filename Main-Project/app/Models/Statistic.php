<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $table = 'statistics';
    protected $primaryKey = 'stats_id';

    protected $fillable = ['stats_id', 'nrv_stat_date', 'nrv_stat_site', 'total_visitors', 
    'local_visitors', 'foreign_visitors', 'first_visitors', 'repeat_visitors', 
    'member_visitors', 'non_member_visitors', 'hide_booked', 
    'photo_hide_booked', 'tours', 'nrv_stat_sales'];
}
