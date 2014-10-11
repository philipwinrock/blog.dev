<?php

use Carbon\Carbon;

class Post extends Eloquent 
{
	public static $rules = array(
		'title' 	=> 'required|max:100',
		'content' 	=> 'required|max:1000'
	);
	
	protected $table = 'posts';

	public function getCreateAtAttribute($value) {

	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	return $utc->setTimeZone('America/Chigago');
	}
}