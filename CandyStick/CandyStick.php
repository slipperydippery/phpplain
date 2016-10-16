<?php

namespace CandyStick;

use CandyStick\Interfaces\CandyOnStick;

class CandyStick implements CandyOnStick{
	public function description()
	{
		return "and all that glory on a colorful rainbow Stick!";
	}

	public function price()
	{
		return .80;
	}
}