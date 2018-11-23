<?php

namespace App;
use Eloquent;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function classes()
    {
        return $this->belongsTo(Students::class);
    }
    

    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }

    // public function students()
    // {
    //     return $this->belongsTo('App\Students');
    // }

    public function students()
    {
        return $this->hasMany('App\Students');
    }
}
