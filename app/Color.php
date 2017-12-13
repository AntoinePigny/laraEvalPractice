<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    public function cats() {
        return $this->belongsToMany('App\Cat', 'cats_colors', 'id_color', 'id_cat');
    }

}
