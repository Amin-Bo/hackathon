<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function members(){
        return $this->hasMany(Club::class,"email","email");

    }
}
