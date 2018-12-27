<?php
    require "../models/Equipment.php";

    class EquipmentService
    {
        private $equipments;

        public function __construct()
        {
            $this->equipments = array(
                new Equipment(1, "equipped", "Екіпірувальний"),
                new Equipment(2, "classic", "Класичний")
            );
        }

        public function getAll()
        {
            return $this->equipments;
        }
    }