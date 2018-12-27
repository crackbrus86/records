<?php
    class Division
    {
        public $id;
        public $name;
        public $titleForMen;
        public $titleForWomen;

        public function __construct(int $id, string $name, string $titleM, string $titleW = NULL)
        {
            $this->id = $id;
            $this->name = $name;
            $this->titleForMen = $titleM;
            $this->titleForWomen = $titleW ? $titleW : $titleM;
        }
    }
?>