<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelePorteur extends Model 
{

    protected $table = 'modeles_porteurs';
    public $timestamps = true;

    public function marquePorteur()
    {
        return $this->belongsTo('MarquePorteur', 'id_marque');
    }

    public function campingcars()
    {
        return $this->hasMany('CampingCar');
    }

}
