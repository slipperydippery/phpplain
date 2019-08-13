<?php
	require 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> MyHit </title>
</head>
<body>

<h1>Here is my hit</h1>
	
	<?php
		use SongExploder\MyHit;

		$mysong = new MyHit('maarten', 'hello my old friend');


		$mysong->printtittle();
		$mysong->printauthor();
		$mysong->chorus();
		$mysong->verse();
		$mysong->burnToCD();



	?>

</body>
</html>