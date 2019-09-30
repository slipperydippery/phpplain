<?php

namespace Hunter\PrimeFactors;

class Prime {

	static function isValidInput($input)
	{
		return (is_int($input) && $input >= 1);
	}

	static function smallestDevisorOf($input)
	{
		for ($prime=2; $prime <= $input; $prime++) 
		{ 
			if ($input % $prime == 0) 
			{
				return $prime;
			}
		}
		return false;
	}

	static function primefactors($input)
	{
		if(! self::isValidInput($input) )
		{
			return 'Please enter a positive prime number';
		}

		$primes = [];
		$remainder = $input;

		while ($factor = self::smallestDevisorOf($remainder)) 
		{
			$primes[] = $factor;
			$remainder = $remainder / $factor;
		}
		return $primes;
	}
}