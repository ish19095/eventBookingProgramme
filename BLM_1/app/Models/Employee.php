<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // table, primary key, fillable

    protected $table = 'employee';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'surname', 'email'];

}
