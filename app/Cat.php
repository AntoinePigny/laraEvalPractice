<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cats';
    public $timestamps = false;

    public function gender() {
        return $this->hasOne('App\Gender', 'id', 'gender_id');
    }

    public function colors() {
        return $this->belongsToMany('App\Color');
    }
}
