<?php

namespace App;
use Eloquent;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    

    protected $table = 'teachers';

    public function cl(){
        return $this->hasManyThrough('Students','Classes');
    }
    

    public function classes()
    {
        return $this->hasMany('App\Classes');
    }

}
