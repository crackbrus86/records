<?php
    class Exercise
    {
        public $int;
        public $name;
        public $title;

        public function __construct(int $id, string $name, string $title)
        {
            $this->int = $id;
            $this->name = $name;
            $this->title = $title;
        }

    }
?>