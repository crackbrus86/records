<?php
    class WeightClass
    {
        public $id;
        public $weight;
        public $name;
        public $gender;
        public $isCommon;

        public function __construct(int $id, float $weight, string $name, string $gender, bool $isCommon = TRUE)
        {
            $this->id = $id;
            $this->weight = $weight;
            $this->name = $name;
            $this->gender = $gender;
            $this->isCommon = $isCommon;
        }
    }
?>