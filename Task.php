<?php

class Task
{

    /**
     * @var mixed
     */
    protected $description;

    /**
     * @var mixed
     */
    protected $completed = false;
    /**
     * @param $description
     */
    public function __construct($description)
    {

        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function description()
    {

        return $this->description;
    }

    public function complete()
    {

        $this->completed = true;

    }

    /**
     * @return mixed
     */
    public function isComplete()
    {
        return $this->completed;
    }

}

$tasks = [

    new Task('Go to the store'),
    new Task('Finish screencast'),
    new Task('Clean my room'),

];

// require 'index.view.php';
