<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $gurarded = array('id');
    //
    public static $rules =array
    (     
        'title' =>'required',
        'body' => 'required',
        );
}
