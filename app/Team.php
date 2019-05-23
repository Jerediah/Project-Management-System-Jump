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

    public function project()
	{
		return $this->hasOne('App\Team');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}
}
