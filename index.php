<?php
	require 'vendor/autoload.php';
	require 'Logger/Logger.php';
	include 'myTrait.php';
	require_once('Mysql/mysqli_connect.php');
	$conn = dbConnect('write', 'pdo'); 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!--/////////////////////////////////
|    COOKIE USAGE CODE
//////////////////////////////////-->
	<?php
		$cookieAlert = new Hunter\Cookies\CookieManagement(new Hunter\Cookies\CookieAcceptanceCheck);
		//$cookieAlert->alert();
	?>

<!--/////////////////////////////////
|	END COOKIE USAGE CODE
//////////////////////////////////-->

<?php


	use CandyStick\CandyStick;
	use CandyStick\Chocolate;
	use CandyStick\Caramel;
	use CandyStick\Interfaces\CandyOnStick;


	$candyStick = New Chocolate(New Caramel(New CandyStick()));
	echo '<br>';
	echo $candyStick->description();
	echo '<br>';
	echo '$' . $candyStick->price();
	echo '<br>';

	echo '----------------------------------------------------';
	echo '<br>';
	echo '<br>';
	$trait = new MyTrait();
	echo $trait->content();
	echo '<br>';
	echo $trait->moreContent();



	echo '<br>';
	echo '<br>';
	echo '<br>';

	echo '----------------------------------------------------';
	echo '<br>';
	echo strtoupper('Mysqli stuff');
	echo '<br>';
	echo '<br>';
	// $first_name = 'Maarten';
	// $last_name = 'de Jager';
	// $email = 'maartendejager@gmail.com';
	// $street = 'Jan van Galen 285';
	// $city = 'Amsterdam';
	// $state = 'NH';
	// $zip = 78945;
	// $phone = '0685033790';
	// $sex = 'M';

	// <form action="http://phpplain.app/received.php" method="post">
	// 	<b>Add a new student</b><br/>
	// 	<input type="text" name="first_name" size="30" value="" placeholder="first name"/><br/>
	// 	<input type="text" name="last_name" size="30" value="" placeholder="last name"/><br/>
	// 	<input type="text" name="email" size="30" value="" placeholder="email"/><br/>
	// 	<input type="text" name="street" size="30" value="" placeholder="street"/><br/>
	// 	<input type="text" name="city" size="30" value="" placeholder="city"/><br/>
	// 	<input type="text" name="state" size="30" maxlength="2" value="" placeholder="state"/><br/>
	// 	<input type="text" name="zip" size="30" maxlength="5" value="" placeholder="zip"/><br/>
	// 	<input type="text" name="phone" size="30" value="" placeholder="phone"/><br/>
	// 	<input type="text" name="birth_date" size="30" value="" placeholder="YYYY-MM-DD"/><br/>
	// 	<input type="text" name="sex" size="30" value="" placeholder="sex"/><br/>
	// 	<input type="text" name="money" size="30" value="" placeholder="money"/><br/>
	// 	<input type="submit" name="submit" value="Send it baby">
	// </form>

	?>

	<a href="insert.php">Go to insert into database test page</a>

	<?php


	$query = 'SELECT name, class_id FROM classes';

	$result = $conn->query($query);
	$errorInfo = $conn->errorInfo();
	if(isset($errorInfo[2]))
	{
		$error = $errorInfo[2];
	}
	else
	{
		$numRows = $result->rowCount();
		$result->closeCursor();
	}

	echo "<br />";
	echo $numRows . "<br />";

	foreach ($conn->query($query) as $row) 
	{
		echo $row['name'] . " " ;
		echo $row['class_id'] . "<br />";
	}

	// mysql_close($conn);





?>

</body>
</html>