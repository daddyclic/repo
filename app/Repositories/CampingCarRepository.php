<?php

namespace App\Repositories;

use DB;
use App\Models\CampingCar;

class CampingCarRepository
{

    protected $CampingCar;
    protected $table;

    public function __construct(CampingCar $CampingCar)
	{
		$this->CampingCar = $CampingCar;
		$this->table = 'campingcars';
	}

	public function getPaginate($n)
	{
		return $this->CampingCar->orderBy('campingcars.created_at', 'desc')->paginate($n);		
	}
}
