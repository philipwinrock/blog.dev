<?php
Carbon\Carbon
class BaseModel extends Eloquent 
{
	const DATE_FORMAT = 'F jS, Y g:i a';


	public function getCreateAtAttribute($value)
	{
	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	
	return $utc->setTimeZone('America/Chigago');
}
}