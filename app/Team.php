<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
	protected $fillable = [
		'name',
		'task_id',
		'user_id'
	];

    public function projects()
	{
		return $this->hasMany('App\Project');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
}
