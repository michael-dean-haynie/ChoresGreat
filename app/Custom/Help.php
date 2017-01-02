<?php

namespace App\Custom;

class Helpers
{
	public static function validateStringLength($string, $minL, $maxL){
	/*
	* Validates if a string's length falls between (or on) the provided min/max
	*
	* @param  (string) $string
	* @param  (int)    $minL
	* @param  (int)    $maxL
	* 
	* @return (bool)
	*/
		$l = strlen($string);
		return $l >= $minL && $l <= $maxL;
	}
}
