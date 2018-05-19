<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MarquePorteurRequest extends Request
{

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'libelle' => 'required|string|max:50|unique:marques_porteurs',
			'test' => 'unique:marques_porteurs,test, NULL,id,libelle'
			];		
	}
	

	/****************************************************************************************************/
	/*$messages = [
			'same'    => 'The :attribute and :other must match.',
			'size'    => 'The :attribute must be exactly :size.',
			'between' => 'The :attribute must be between :min - :max.',
			'in'      => 'The :attribute must be one of the following types: :values',
	];*/
	/****************************************************************************************************/
	public function messages()
	{
		return [
			'libelle.unique' => 'Inutile d\'enregistrer à nouveau :input. Ce nom de marque existe déjà',
		];
	}	

}
