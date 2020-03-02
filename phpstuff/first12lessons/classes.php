<?php

require 'Task.php';

class Task {

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function completer()
    {
        $this->completed = !$this->completed;
        return $this->completed;
    }


}