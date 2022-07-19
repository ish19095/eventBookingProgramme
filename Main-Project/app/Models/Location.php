<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table='locations';
    protected $primaryKey = 'loc_id';

    protected $fillable = ['loc_name', 'loc_code'];
}
