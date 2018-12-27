<?php
    class Gender
    {
        public $id;
        public $name;
        public $title;

        public function __construct(int $id, string $name, string $title)
        {
            $this->id = $id;
            $this->name = $name;
            $this->title = $title;
        }
    }
?>