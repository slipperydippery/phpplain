<?php

interface CarService {
	public function getCost();
	public function getDescription();
}

class BasicInspection implements CarService {
	public function getCost()
	{
		return 25;
	}
	public function getDescription()
	{
		return 'Basic inspection';
	}
}

class OilChange implements CarService {

	protected $carService;

	function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 29 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ', and an oil change';
	}
}

class TireRotation implements Carservice {

	protected $carService;

	function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 15 + $this->carService->getCost();
	}
	public function getDescription()
	{
		return $this->carService->getDescription() . ', and rotated tires';
	}
}

$service = new TireRotation(new OilChange(new BasicInspection()));

echo $service->getDescription() . '.';
echo '<br>';
echo '$' . $service->getcost() . ',-';
echo '<br>';

