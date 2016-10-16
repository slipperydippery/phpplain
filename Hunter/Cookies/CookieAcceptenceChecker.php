<?php

namespace Hunter\Cookies;

interface CookieAcceptenceChecker {
	public function check();
	public function set($value);
}