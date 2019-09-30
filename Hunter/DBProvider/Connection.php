<?php

namespace Hunter\DBProvider;

use Hunter\DBProvider\Interfaces\DBProvider;

class Connection {
	protected $dbprovider;

	public function __construct(DBProvider $dbprovider)
	{
		$this->dbprovider = $dbprovider;
	}


}