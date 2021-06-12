<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [ ];
    public function user(){
        return $this->hasOne(User::class,"email","email");

    }
    public function clubs(){
        return $this->hasMany(Club::class,"email","email");

    }
}
