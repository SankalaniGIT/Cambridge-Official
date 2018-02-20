<?php

namespace App\School;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'school_profile';

    protected $guarded = [];

    public $timestamps = false;

}
