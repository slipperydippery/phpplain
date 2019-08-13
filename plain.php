<?php
	$task = [
		'title' => 'do the dishes',
		'due' => 'tonight',
		'assigned_to' => 'maarten',
		'completed' => true
	];
?>
<h1>Task: <?= $task['completed'] ? ('complete') : ''?> </h1>
<ul>
	<?php foreach($task as $element => $specification) : ?>
		<li><strong><?= $element ?>:</strong> <?= $specification?> </li>
	<?php endforeach ?>
</ul>
