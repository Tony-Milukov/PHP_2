<?php
    $userName = (string) readline("whats your name? ");
    $tasks = [];
    $howManyTasks = null;
   function isInteger ($input) {
       return ctype_digit(strval($input));
   }
    do {
        $howManyTasks = readline("How many tasks have you for today? ");
    } while (!isInteger($howManyTasks));

    if($howManyTasks >= 1) {
       for($i = 0; $i != $howManyTasks; $i++) {
           $nameOfTask =  (string) readline("What have you to do? ");
           do {
               $taskTime = readline("How long will it take? ");
           } while (!isInteger($taskTime));
           $newTask = [
               "nameOfTask" => $nameOfTask,
               "taskTime" =>  $taskTime
           ];
           $tasks[] = $newTask;
           $newTask = [];
       }
        echo ("Your name is $userName \n\n" );
        echo ("You have $howManyTasks ". count($tasks) >= 2 ? "tasks" : "task" . "for today \n\n");
        $allTime = 0;
        foreach($tasks as $index => $item) {
            echo($index+1 . ".  " . $item["nameOfTask"] . "(". $item["taskTime"] . "h)\n");
            $allTime += $item["taskTime"];
        }
        echo ("\nThat will take you $allTime"."h");

    } else {
        echo "You don't seem to have tasks for the day! enjoy it";
    }
