<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillUser extends Model
{
    protected $table = 'skill_user';
    protected $primaryKey = ['user_id', 'skill_id'];
    public $incrementing = false;
}
