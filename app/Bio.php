<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    public function publication(){
    return $this->belongsTo('app\Publication');
    }
}
