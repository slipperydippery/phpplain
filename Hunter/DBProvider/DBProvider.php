<?php

namespace Hunter\DBProvider;

use PDO;

class DBProvider {

	static function connectToDb($config)
	{
		try {
			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'], 
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
			die('Could not connect: ' . $e->getMessage() );
		}
	}

	
}