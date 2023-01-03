<?php
    require_once ("classes/Task.php");
    require_once ("classes/Tasks.php");
    require_once ("classes/User.php");
    require_once ("classes/TaskService.php");
    $tony = new User("tony","okydri@gmail.com");
    $tasks = new Tasks();
    $newTask = new Task("to eat",1,$tony);

    TaskService::addComment("very good man",$tony,$newTask);
    print_r($newTask->getComents());
