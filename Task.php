<?php
/**
 * Created by PhpStorm.
 * User: Liubomyr
 * Date: 12/31/17
 * Time: 18:44
 */

class Task
{
    public $description = 'Learn php';
}

$task = new Task();

var_dump($task->description);