<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table="company";
    public $timestamps = false;


    public function applicants()
    {

    	return $this->belongsToMany('Application','application','cid','enumber');
    }
}
