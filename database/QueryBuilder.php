<?php

class QueryBuilder
{
	public function selectAll($table)
	{
		$statement = $pdo->prepare('select * from todos');

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	}
}