<?php
    require_once "User.php";
    require_once "Task.php";
    class Comment
    {
        private string $text;
        private User $owner;
        private Task $task;
        private DateTime $creationDate;

        /**
         * @param string $text
         * @param User $owner
         * @param Task $task
         * @param DateTime $creationDate
         */
        public function __construct(string $text, User $owner, Task $task)
        {
            $this->text = $text;
            $this->owner = $owner;
            $this->task = $task;
            $this->creationDate = new DateTime();
        }


    }