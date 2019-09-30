<?php

namespace Hunter\DBProvider\Providers;

use PDO;
use Hunter\DBProvider\Interfaces\DBProvider;

class MysqlProvider implements DBProvider {
	public static function make($config)
	{
		try {
			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'], 
				$config['username'],
				$config['password'],
				$config['options']
			)
		} catch (PDOException $e) {
			die('Could not connect: ' . $e->getMessage() );
		}
	}
}