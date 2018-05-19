<?php

namespace App\Repositories;

use DB;
use App\Models\ModelePorteur;

class ModelePorteurRepository
{

    protected $ModelePorteur;
    protected $table;

    public function __construct(ModelePorteur $ModelePorteur)
	{
		$this->ModelePorteur = $ModelePorteur;
		$this->table = 'modeles_porteurs';
	}

	public function getPaginate($n)
	{
		return $this->ModelePorteur->orderBy('modeles_porteurs.created_at', 'desc')->paginate($n);		
	}
}
