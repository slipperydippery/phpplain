<?php

use Hunter\Tasks\Task;

require 'bootstrap.php'

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

$tasks = $query->selectAll('todos', 'Hunter\Tasks\Task')

?>

<ul>
	<?php foreach ($tasks as $task): ?>
		<li> 
			<?php if ($task->completed): ?>
				<strike><?= $task->description ?> </strike>
			<?php else: ?>
				<?= $task->description ?> 
			<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>

</body>
</html>