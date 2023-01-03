<?php
    require_once ("Comment.php");
    class TaskService
    {
        static function addComment (string $text, User $owner, Task $task):void {
            $task->addComent(new Comment($text,$owner,$task));
        }
    }