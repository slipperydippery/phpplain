<?php

interface SingleSandwitch {
	public function description();
}

class BrownBun implements SingleSandwitch {
	public function description()
	{
		return 'Brown Bun';
	}
}

class WhiteBun implements SingleSandwitch {
	public function description()
	{
		return 'White Bun';
	}
}

class Meat implements SingleSandwitch {
	protected $singleSandwitch;

	public function __construct(SingleSandwitch $singleSandwitch)
	{
		$this->singleSandwitch = $singleSandwitch;
	}

	public function description()
	{
		return $this->singleSandwitch->description() . ', with meat';
	}
}

class Mayonaise implements SingleSandwitch {
	protected $singleSandwitch;

	public function __construct(SingleSandwitch $singleSandwitch)
	{
		$this->singleSandwitch = $singleSandwitch;
	}

	public function description()
	{
		return $this->singleSandwitch->description() . ', with mayonaise';
	}
}

class Tomato implements SingleSandwitch {
	protected $singleSandwitch;

	public function __construct(SingleSandwitch $singleSandwitch)
	{
		$this->singleSandwitch = $singleSandwitch;
	}

	public function description()
	{
		return $this->singleSandwitch->description() . ', with Tomato';
	}
}

$sandwitch = New Tomato(New Mayonaise(New Meat(New BrownBun())));
echo $sandwitch->description();