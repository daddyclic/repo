<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarquePorteur extends Model 
{

    protected $table = 'marques_porteurs';
    protected $fillable = ['libelle'];
    
    public $timestamps = true;

    public function porteurs()
    {
        return $this->hasMany('ModelePorteur');
    }

}
