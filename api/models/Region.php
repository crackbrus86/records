<?php
    class Region
    {
        public $id;
        public $name;
        public $shortName;

        public function __construct(int $id, string $name, string $shortname)
        {
            $this->id = $id;
            $this->name = $name;
            $this->shortName = $shortname;
        }
    }
?>