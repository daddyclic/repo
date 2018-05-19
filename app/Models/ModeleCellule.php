<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModeleCellule extends Model 
{

    protected $table = 'modeles_cellules';
    public $timestamps = true;

    public function marqueCellule()
    {
        return $this->belongsTo('MarqueCellule', 'id_marque');
    }

    public function campingcars()
    {
        return $this->hasMany('CampingCar');
    }

}
