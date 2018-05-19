<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarqueCellule extends Model 
{

    protected $table = 'marques_cellules';
    public $timestamps = true;

    public function cellules()
    {
        return $this->hasMany('ModeleCellule');
    }

}
