<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Academic_details extends Model
{
    protected $table = "job_seeker_academic_details";
    public $timestamps = false;
    public $primaryKey  = 'js_academic_id';
    public function countries(){
        return $this->hasOne('App\Model\Countries','id','country_id');
    }
    public function states(){
    	return $this->hasOne('App\Model\States','id','state_id');
    }
    public function citys(){
    	return $this->hasOne('App\Model\Cities','id','city_id');
    }
    
}
