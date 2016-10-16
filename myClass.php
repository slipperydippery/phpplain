<?php

class myClass{
	
	const PUBTEST = 800;

	private $totalKM;

	public function __construct () 
	{
		global $totalKM;
		$totalKM = 0;
		echo 'you have driven ' . $totalKM . ' kms...' . '<br>';
	}

	public function testDrive($km)
	{
		global $totalKM;
		$totalKM += $km;
		return 
		(
			'You drove ' . $km . ' km!' . '<br>' . 
		 	'This is ' . $this->kmToMiles($km) . ' miles!' . '<br>' .
		 	'Your total is now ' . $totalKM . ' km!!' . '<br><br><br>' 
		 );
	}

	private function kmToMiles ($km)
	{
		$miles = $km * 0.621371;
		return $miles;
	}
}