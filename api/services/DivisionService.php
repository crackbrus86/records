<?php
    require "../models/Division.php";

    class DivisionService
    {
        private $divisions;

        public function __construct()
        {
            $this->divisions = array(
                new Division(1, "open", "Відкритий"),
                new Division(2, "sub-juniors", "Юнаки", "Дівчата"),
                new Division(3, "juniors", "Юніори", "Юніорки"),
                new Division(4, "master 1", "Ветерани 1"),
                new Division(5, "master 2", "Ветерани 2"),
                new Division(6, "master 3", "Ветерани 3"),
                new Division(7, "master 4", "Ветерани 4")
            );
        }

        function getAll()
        {
            return $this->divisions;
        }
    }

