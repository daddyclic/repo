<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model 
{

    protected $table = 'equipements';
    public $timestamps = true;

    public function campingcar()
    {
        return $this->belongsTo('CampingCar', 'id_campingcar');
    }

}
