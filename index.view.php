<!DOCTYPE html>
<html>
<head>
	<title>PHP test</title>
</head>
<body>
	<ul>
		<?php foreach($tasks as $task) : ?>
			<li><?= $task->description ?></li>
		<?php endforeach ?>
	</ul>


</body>
</html>


