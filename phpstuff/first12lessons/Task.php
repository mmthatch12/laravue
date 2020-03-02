<?php

class Task
{
    public $description;
    public $completed;

    public function finish() {
        $this->completed = !$this->completed;
    }
  
}