<?php

require 'vendor/autoload.php';
$config = require 'config.php';

use Hunter\DBProvider\DBProvider;
use Hunter\DBProvider\QueryBuilder;

$query = new QueryBuilder( DBProvider::connectToDb($config['database']) );