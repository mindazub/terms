<?php

class Term extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'lang_id' => 'required',	 	
		'title' => 'required',
		'description' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [	
	 'title', 'description', 'lang_id', 
	];

}