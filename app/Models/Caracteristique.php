<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model 
{

    protected $table = 'caracteristiques';
    public $timestamps = true;

    public function campingcars()
    {
        return $this->hasMany('CampingCar');
    }

}
