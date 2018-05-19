<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model 
{

    protected $table = 'types';
    public $timestamps = true;

    public function campingcars()
    {
        return $this->hasMany('CampingCar');
    }

}
