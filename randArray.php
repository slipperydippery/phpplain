<?php

interface randomizesArray {
	public function randomizeArray($oldArray);
	
}

class randArray implements randomizesArray {
	private $randomizedArray = [];

	public function __construct($newArray)
	{
		$this->randomizedArray = $this->randomizeArray($newArray);	// Randomize the class array
		var_dump($this->randomizedArray);							// Return the class array
	}


	// Randomizes an Array	
	public function randomizeArray($oldArray)
	{
		$newArray = [];
		$y = count($oldArray);
		for($x = 0; $x < $y; $x++)
		{
			$remove =  (rand(0, (count($oldArray)) - 1 ));		// Generate a random number that corresponds to the remaining array elements
			$newArray[$x] = $oldArray[$remove];					// Copy that array value to the beginning of the new array
			unset($oldArray[$remove]);							// Remove that element from the old array
			$oldArray=array_values($oldArray);					// Remake the array so there is no gap where the removed element used to be
		}

		return $newArray;
	}
}