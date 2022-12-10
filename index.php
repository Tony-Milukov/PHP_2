<?php
    //Homework 1.1

//    $name = readline("whats your name ");
//    $age = readline("whats your age ");
//    echo("your name is $name and $age years old ");

    //Homework 1.2
    $userName = readline("whats your name? ");
    $tasks = [];
    $howManyTasks = readline("How many tasks have you for today? ");
    if($howManyTasks >= 1) {
       for($i = 0; $i != $howManyTasks; $i++) {
           $nameOfTask =  readline("What have you to do? ");
           $taskTime = readline("How long will it take? ");
           $newTask = [
               "nameOfTask" => $nameOfTask,
               "taskTime" =>  $taskTime
           ];
           $tasks[] = $newTask;
           $newTask = [];
       }
        echo ("Your name is $userName \n\n" );
        echo ("You have " . count($tasks) . " task for today \n\n");
        $allTime = 0;
        foreach($tasks as $index => $item) {
            echo($index+1 . ".  " . $item["nameOfTask"] . "(". $item["taskTime"] . "h)\n");
            $allTime += $item["taskTime"];
        }
        echo ("That will take you $allTime"."h");
    }
