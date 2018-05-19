<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model 
{

    protected $table = 'etats';
    public $timestamps = false;

    public function campingcars()
    {
        return $this->hasMany('CampingCar');
    }

}
