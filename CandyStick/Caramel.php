<?php

namespace CandyStick;

use CandyStick\Interfaces\CandyOnStick;
use CandyStick\Traits\CandyConstructor;

class Caramel implements CandyOnStick {

	use CandyConstructor;

	protected $candyOnStick;

	public function __construct(CandyOnStick $candyOnStick)
	{
		$this->candyOnStick = $candyOnStick;
	}

	public function description()
	{
		return "delicious melting caramel, " . $this->testCase() . $this->candyOnStick->description();
	}

	public function price()
	{
		return 1.50 + $this->candyOnStick->price();
	}

}
