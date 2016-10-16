<?php

class fillArray
{
	protected $fillableArray = [];

	public function __construct()
	{

	}

	public function fillArray($value)
	{
		$this->fillableArray[(count($this->fillableArray))] = $value;
		var_dump($this->fillableArray);
	}

	public function removeFromArray($value)
	{
		$x = 0;
		foreach($this->fillableArray as $item)
		{
			if($item == $value)
			{
				unset($this->fillableArray[$x]);
				$this->fillableArray = array_values($this->fillableArray);
				var_dump($this->fillableArray);
				break;
			}
			$x++;
		}
	}
}