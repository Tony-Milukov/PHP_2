<?php
    require_once("User.php");

    class Task
    {
        private string $description;
        private $coments = [];
        private DateTime $dateCreated;
        private ?DateTime $dateUpdated = null;
        private ?DateTime $dateDone = null;
        private int $priority;
        private bool $isDone = false;
        private User $owner;

        /**
         * @param string $description
         * @param DateTime $dateCreated
         * @param int $priority
         * @param User $owner
         */

        public function __construct(string $description, int $priority, User $owner)
        {
            $this->description = $description;
            $this->dateCreated = new DateTime();
            $this->priority = $priority;
            $this->owner = $owner;
        }

        /**
         * @return array
         */
        public function getComents(): array
        {
            return $this->coments;
        }

        /**
         * @param array $coments
         */
        public function addComent($coment): void
        {
            $this->coments = [...$this->coments,$coment];
        }

        /**
         * @return string
         */
        public function getDescription(): string
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription(string $description): void
        {
            $this->dateUpdated = new DateTime();
            $this->description = $description;
        }

        /**
         * @return int
         */
        public function getPriority(): int
        {
            return $this->priority;
        }

        /**
         * @param int $priority
         */
        public function setPriority(int $priority): void
        {
            $this->dateUpdated = new DateTime();
            $this->priority = $priority;
        }

        /**
         * @return bool
         */
        public function isDone(): bool
        {
            return $this->isDone;
        }

        /**
         * @param bool $isDone
         */
        public function markAsDone(): void
        {
            $this->dateDone = new DateTime();
            $this->dateUpdated = new DateTime();
            $this->isDone = true;
        }

        /**
         * @return DateTime
         */
        public function getDateCreated(): DateTime
        {
            return $this->dateCreated;
        }

        /**
         * @return DateTime|null
         */
        public function getDateUpdated(): ?DateTime
        {
            return $this->dateUpdated;
        }

        /**
         * @return DateTime|null
         */
        public function getDateDone(): ?DateTime
        {
            return $this->dateDone;
        }

        /**
         * @return User
         */
        public function getOwner(): User
        {
            return $this->owner;
        }

    }