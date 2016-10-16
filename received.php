<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

if(isset($_POST['submit'])){
	$data_missing = array();

	if(empty($_POST['first_name'])){
		$data_missing[] = 'First Name';
	} else {
		$first_name = trim($_POST['first_name']);
	}

	if(empty($_POST['last_name'])){
		$data_missing[] = 'Last Name';
	} else {
		$last_name = trim($_POST['last_name']);
	}
	
	if(empty($_POST['email'])){
		$data_missing[] = 'Email';
	} else {
		$email = trim($_POST['email']);
	}
	
	if(empty($_POST['street'])){
		$data_missing[] = 'street';
	} else {
		$street = trim($_POST['street']);
	}
	
	if(empty($_POST['city'])){
		$data_missing[] = 'City';
	} else {
		$city = trim($_POST['city']);
	}
	
	if(empty($_POST['state'])){
		$data_missing[] = 'State';
	} else {
		$state = trim($_POST['state']);
	}
	
	if(empty($_POST['zip'])){
		$data_missing[] = 'zip';
	} else {
		$zip = trim($_POST['zip']);
	}
	
	if(empty($_POST['phone'])){
		$data_missing[] = 'phone';
	} else {
		$phone = trim($_POST['phone']);
	}
	
	if(empty($_POST['birth_date'])){
		$data_missing[] = 'birth_date';
	} else {
		$birth_date = trim($_POST['birth_date']);
	}
	
	if(empty($_POST['sex'])){
		$data_missing[] = 'sex';
	} else {
		$sex = trim($_POST['sex']);
	}
	
	if(empty($_POST['money'])){
		$data_missing[] = 'money';
	} else {
		$money = trim($_POST['money']);
	}

	if(empty($data_missing)){
		require_once('Mysql/mysqli_connect.php');
		$conn = dbConnect('write'); 

		$query = "INSERT INTO students (first_name, last_name, email, street, city, state, zip, phone, birth_date, sex, date_entered, luch_cost, student_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL)";
		$stmt = $conn->stmt_init();
		$stmt->prepare($query);
		$stmt->bind_param('ssssssisssd', $first_name, $last_name, $email, $street, $city, $state, $zip, $phone, $birth_date, $sex, $luch_cost);

		$stmt->execute();

		$affected_rows = mysqli_stmt_affected_rows($stmt);
		if ($affected_rows == 1){
			echo 'Student Entered';
			mysqli_stmt_close($stmt);
		} else {
			echo 'Error occured ' . mysqli_error(); 
		}
	}
	else {
		echo 'you need to enter the following data <br />';
		foreach($data_missing as $missing) {
			echo $missing . '<br />';

		}
	}
}

?>

</body>
</html>