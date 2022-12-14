<?php
    //Homework 2.1
//    $answer = null;
//    $question = "В каком году произошло крещение Руси? ";
//    $givedAnsewers = "810, 990 или 740 год";
//    $answers = [740,810];
//    $rightAnswer = 990;
//    do {
//            $answer = (int)readline("$question\n$givedAnsewers");
//
//        if(in_array($answer,$answers)) {
//            print("Извините, ваш ответ не верный");
//            break;
//        }
//    } while($answer !== $rightAnswer);
//    echo   $answer == $rightAnswer ? "Поздравляю, вы правильно ответили на этот вопрос!" : null;
//

    //Homework 2.2
//    $userName = (string) readline("whats your name? ");
//    $tasks = [];
//    $howManyTasks = null;
   function isInteger ($input) {
       return ctype_digit(strval($input));
   }
//    do {
//        $howManyTasks = readline("How many tasks have you for today? ");
//    } while (!isInteger($howManyTasks));
//
//    if($howManyTasks >= 1) {
//       for($i = 0; $i != $howManyTasks; $i++) {
//           $nameOfTask =  (string) readline("What have you to do? ");
//           do {
//               $taskTime = readline("How long will it take? ");
//           } while (!isInteger($taskTime));
//           $newTask = [
//               "nameOfTask" => $nameOfTask,
//               "taskTime" =>  $taskTime
//           ];
//           $tasks[] = $newTask;
//           $newTask = [];
//       }
//        echo ("Your name is $userName \n\n" );
//        echo ("You have $howManyTasks ". count($tasks) >= 2 ? "tasks" : "task" . "for today \n\n");
//        $allTime = 0;
//        foreach($tasks as $index => $item) {
//            echo($index+1 . ".  " . $item["nameOfTask"] . "(". $item["taskTime"] . "h)\n");
//            $allTime += $item["taskTime"];
//        }
//        echo ("\nThat will take you $allTime"."h");
//
//    } else {
//        echo "You don't seem to have tasks for the day! enjoy it";
//    }

// Homework 2.3
    do {
        $fingerNumber = readline("input finger number 1-5 ");
        if(isInteger($fingerNumber)) {
            if ($fingerNumber >= 1 && $fingerNumber <= 5) {
                break;
            }
        }
    } while (true);
    $fingers = "12345";
        if ($fingerNumber >= 1 || $fingerNumber < 5) {
           if($fingerNumber !== 5) {
               while ($fingerNumber-1 !== 4) {
                   $fingerNumber++;
                   echo $fingerNumber;
               }
           }
    } if ($fingerNumber == 5) {
            while ($fingerNumber-1 !== 0) {
                $fingerNumber--;
                echo $fingerNumber;
                if($fingerNumber-1 == 0) {
                    break;
                }
            }
        }