<?php

namespace CandyStick;

use CandyStick\Interfaces\CandyOnStick;

class Chocolate implements CandyOnStick {
	protected $candyOnStick;

	public function __construct(CandyOnStick $candyOnStick)
	{
		$this->candyOnStick = $candyOnStick;
	}

	public function description()
	{
		return "delicious pure chocolate, " . $this->candyOnStick->description();
	}

	public function price()
	{
		return 2.20 + $this->candyOnStick->price();
	}

}