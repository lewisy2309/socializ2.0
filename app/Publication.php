<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function user(){
        return $this->belongsTo('app\User');
    }

    public function image(){
        return $this->hasMany('app\Image');
    }

    public function bvdeo(){
        return $this->hasMany('app\Video');
    }

    public function bio(){
        return $this->hasMany('app\Bio');
    }
}
