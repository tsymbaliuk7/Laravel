<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }

    public function cars(){
        return $this->belongsToMany('App\Car');
    }
}
