<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $gurarded = array('id');
    //
    public static $rules =array
    (    'name'=>'required',
         'gender'=>'required',
         'hobby'=>'required',
        'body' => 'required',
        );
}
