<?php


class Task{

    protected $description;
    protected $completed = false;
	public function __construct($description)
	{
		$this->description = $description;

	}

}
$task = new $task('Open to Work');
var_dump($task);
require 'Classes.view.php';
?>