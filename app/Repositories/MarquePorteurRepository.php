<?php
/* Hye */
namespace App\Repositories;

use DB;
use App\Models\MarquePorteur;
use Illuminate\Database\QueryException;

class MarquePorteurRepository
{

    protected $MarquePorteur;
    protected $table;

    public function __construct(MarquePorteur $MarquePorteur)
	{
		$this->MarquePorteur = $MarquePorteur;
		$this->table = 'marques_porteurs';
	}

	
	public function all()
	{
		return $this->MarquePorteur->all();
	}
	
	public function create($inputs)
	{
        try {
            $status = $this->MarquePorteur->create($inputs);
        }
        catch (QueryException $e) {
           return $e;
        }       
		
		return $status;
	}	
}
