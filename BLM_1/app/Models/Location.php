<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location';
    protected $primaryKey = 'id';

    protected $fillable = ['site', 'address_no', 'street', 'locality'];


}
