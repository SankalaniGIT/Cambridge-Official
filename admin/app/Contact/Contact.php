<?php

namespace App\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table = 'contact';

    public $timestamps = false;

    protected $fillable = ['address','email','telephone'];


}
