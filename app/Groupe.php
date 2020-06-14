<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function user(){
        return $this->belongsTo('app\User');
    }

    public function user_groupe(){
        return $this->belongsToMany('app\User');
    }
}
