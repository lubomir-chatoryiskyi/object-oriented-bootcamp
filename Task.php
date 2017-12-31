<?php
/**
 * Created by PhpStorm.
 * User: Liubomyr
 * Date: 12/31/17
 * Time: 18:44
 */

class Task
{
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description)
    {
        $this->description = $description;
        $this->title = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }
}