<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected $table = 'newscategory';

    public $timestamps = false;
}
