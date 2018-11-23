<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    public function classes()
    {
        return $this->belongsTo('App\Classes');
    }

    // public function student()
    // {
    //     return $this->hasMany('App\Classes');
    // }
}
