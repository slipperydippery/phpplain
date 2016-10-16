<?php

if (isset($_POST['insert']))
{
	require_once('Mysql/mysqli_connect.php');
	// initialize flag
	$OK = false;
	// create db connection 
	$conn = dbConnect('write');
	// initialize prepared statment 
	$stmt = $conn->stmt_init();
	// create sql 
	$class = 'Dutch';
	$sql = "INSERT INTO classes (name, class_id) VALUES (?, NULL)";
	if ($stmt->prepare($sql))
	{
		// bind paraperters and execute 
		$stmt->bind_param('s', $_POST['name']);
		$stmt->execute();
		if ($stmt->affected_rows > 0)
		{
			$OK = true;
		}


	}
	// redirect if successfull or display error
	if ($OK)
	{
		header('Location: http://phpplain.app');
		exit;
	}
	else
	{
		$error = $stmt->error;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Into Database</title>
</head>
<body>

	<form method="post" action="">
		<b>Add a new class!</b><br />
		<?php
			if (isset($error))
			{
				echo "<p>Error: $error</p>";
			}
		?>
		<input name="name" type="text" size="30" id="name" placeholder="Class name"><br />
		<input type="submit" name="insert" value="Create class"><br />
	</form>


</body>
</html>