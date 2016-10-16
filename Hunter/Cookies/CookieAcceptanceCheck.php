<?php

namespace Hunter\Cookies;

use Hunter\Cookies\CookieAcceptenceChecker;

class CookieAcceptanceCheck implements CookieAcceptenceChecker {

	public function check()
	{
		$cookieAlertValue = isset($_COOKIE['cookieAlert']) ? $_COOKIE['cookieAlert'] : 0;				// Check value in cookie, default to 0
		$cookieAlertValue = isset($_POST['cookieAlert']) ? $_POST['cookieAlert'] : $cookieAlertValue;	// Check value in _POST, default to cookie
		
		$this->set($cookieAlertValue);
		
		return $cookieAlertValue;																		// Return the value
	}

	public function set($value)
	{
		setcookie('cookieAlert', $value, time() + (86400 * 30), "/" );  						
	}
}