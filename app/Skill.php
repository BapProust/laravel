<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

	protected $fillable = ['id',  'nom', 'description', 'src'];

	public function skills(){
		return $this->belongsToMany('App\Skill')->withPivot('level');
	}
}
