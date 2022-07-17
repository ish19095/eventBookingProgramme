<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $table = 'sites';
    protected $primaryKey = 'site_id';

    protected $fillable = ['site_name'];

    public function schools(){
        return $this->hasMany('App\Models\School');
    }

    // public function external_evevnts(){
    //     return $this->hasMany('App\Models\EventExternal');
    // }

    // public function internal_events(){
    //     return $this->hasMany('App\Models\EventInternal');
    // }

    // public function statistics(){
    //     return $this->hasMany('App\Models\Statistic');
    // }
}
