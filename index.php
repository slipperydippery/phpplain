<?php

use Hunter\PrimeFactors\Prime;

require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$cookieAlert = new Hunter\Cookies\CookieManagement(new Hunter\Cookies\CookieAcceptanceCheck);
?>

<?php

var_dump(Prime::primefactors(558));




?>

</body>
</html>