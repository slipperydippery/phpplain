<?php

// DEFINE ('DB_USER', 'studentweb');
// DEFINE ('DB_PASSWORD', 'password1');
// DEFINE ('DB_HOST', 'localhost');
// DEFINE ('DB_NAME', 'banas_tutorial');


function dbConnect($usertype, $connectionType = 'mysqli') {
		$host = 'localhost';
		$db = 'banas_tutorial';
		if ($usertype == 'read') {
			$user = 'studentweb';
			$pwd = 'password1';
		} elseif ($usertype == 'write') {
			$user = 'homestead';
			$pwd = 'secret';
		}

		if ($connectionType == 'mysqli') {
			$conn = @ new mysqli($host, $user, $pwd, $db);
			if($conn->connect_error) {
				exit($conn->connect_error);
			}
			return $conn;

		} else {
			try {
				$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
}


?>