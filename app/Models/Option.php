<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model 
{

    protected $table = 'options';
    public $timestamps = true;

    public function campingcar()
    {
        return $this->belongsTo('CampingCar', 'id_campingcar');
    }

}
