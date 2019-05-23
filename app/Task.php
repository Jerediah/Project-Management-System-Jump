<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
    	'name',
    	'projec_id',
    	'user_id',
    	'days',
    	'hours',
    	'company_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }
}
