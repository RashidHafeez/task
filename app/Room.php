<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Room extends Model
{

public function people(){

    return $this->hasMany('App\People');
}
}
