<?php

class Connection
{
	public static function make()
	{
		try {
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}