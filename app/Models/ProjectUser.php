<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $fillable = ['group_id', 'user_id'];

    public $timestamps = false;
}
