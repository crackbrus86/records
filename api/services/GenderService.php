<?php
    require "../models/Gender.php";

    class GenderService
    {
        private $genders;

        public function __construct()
        {
            $this->genders = array(
                new Gender(1, "men", "Чоловіки"),
                new Gender(2, "women", "Жінки")
            );
        }

        public function getAll()
        {
            return $this->genders;
        }
    }
