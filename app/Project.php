<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
	protected $fillable = [
    	'title',
    	'description',
    	'priority',
    	'start_date',
    	'finish_date',
    	'team_id',
    	'user_id'
    ];

    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }
}
