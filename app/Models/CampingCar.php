<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampingCar extends Model 
{

    protected $table = 'campingcars';
    public $timestamps = true;

    public function cellule()
    {
        return $this->belongsTo('ModeleCellule', 'id_cellule');
    }

    public function porteur()
    {
        return $this->belongsTo('ModelePorteur', 'id_porteur');
    }

    public function etat()
    {
        return $this->belongsTo('Etat', 'id_etat');
    }

    public function caracteristique()
    {
        return $this->belongsTo('Caracteristique', 'id_caracteristique');
    }

    public function type()
    {
        return $this->belongsTo('Type', 'id_type');
    }

    public function equipements()
    {
        return $this->hasMany('Equipement');
    }

    public function images()
    {
        return $this->hasMany('Image');
    }

    public function extras()
    {
        return $this->hasMany('Option');
    }

}
