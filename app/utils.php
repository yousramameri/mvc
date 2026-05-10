<?php
declare(strict_types = 1);

if(!function_exists('french_date'))
{
	/**
	* Retourne une date au format standard depuis une date SQL
	* @param string Une chaîne au format AAAA-MM-JJ ou AAAA-MM-JJ HH:MM:SS
	* @return string Une chaîne au format JJ/MM/AAAA
	*/
	function french_date(string $SQLDate) : string
	{
		$frenchDate = new DateTime($SQLDate);
		return $frenchDate->format('d/m/Y');
	}
}