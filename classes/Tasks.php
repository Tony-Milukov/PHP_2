<?php

    class Tasks
    {
       private array $allTasks = [];

        /**
         * @return array
         */
        public function getAllTasks(): array
        {
            return $this->allTasks;
        }

        /**
         * @param array $allTasks
         */
        public function setAllTasks(Task $task): void
        {
            $this->allTasks = [...$this->allTasks,$task];
        }

        /**
         * @param $allTasks
         */



    }