<?php

namespace Hunter\Cookies;

class CookieManagement {

	private $cookieCheck;

	public function __construct(CookieAcceptenceChecker $cookieCheck)
	{
		$this->cookieCheck = $cookieCheck;
		$this->alert();
	}

	function alert()
	{
		if(!$this->cookieCheck->check())
		{
			CookieAlertDisplay::display();
		}
	}
}