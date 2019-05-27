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

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
}
