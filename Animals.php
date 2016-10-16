<?php

interface Communicator {
	public function communicate();
}

class TalkTable {
	protected $being;

	public function __construct(Communicator $being)
	{
		$this->being = $being;
	}

	public function communicate()
	{
		echo $this->being->communicate();
	}
}

class Person implements Communicator{
	public function communicate()
	{
		return "Bla bla bla";
	}
}

class Dog implements Communicator{
	public function communicate()
	{
		return "Woof gggrrr";
	}
}

$talker = new TalkTable(New Person);
$barker = new TalkTAble(New Dog);
$barker->communicate();