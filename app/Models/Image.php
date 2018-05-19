<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model 
{

    protected $table = 'images';
    public $timestamps = true;

    public function campingcar()
    {
        return $this->belongsTo('CampingCar', 'id_campingcar');
    }

}
