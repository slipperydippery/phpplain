<?php

interface Logger {
	public function execute($message);
}

class LogToFile implements Logger {
	public function execute($message)
	{
		return 'Logged to File: ' . $message;
	}
}

class LogToDatabase implements Logger {
	public function execute($message)
	{
		return 'Logged to Database: ' . $message;
	}
}


class UsersController {
	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'JohnDoe';

		echo '<br><br><br>' . $this->logger->execute($user) . '<br><br><br>';
	}
}


$controller = new UsersController(new LogToFile);
$controller->show();