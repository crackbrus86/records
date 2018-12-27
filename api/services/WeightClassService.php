<?php
    require "../models/WeightClass.php";

    class WeightClassService
    {
        private $weightClasses;

        public function __construct()
        {
            $this->weightClasses = array(
                new WeightClass(1, 42.99, "-43kg", "women", FALSE),
                new WeightClass(2, 46.99, "-47kg", "women"),
                new WeightClass(3, 51.99, "-52kg", "women"),
                new WeightClass(4, 56.99, "-57kg", "women"),
                new WeightClass(5, 62.99, "-63kg", "women"),
                new WeightClass(6, 71.99, "-72kg", "women"),
                new WeightClass(7, 83.99, "-84kg", "women"),
                new WeightClass(8, 84.00, "84+kg", "women"),
                new WeightClass(9, 52.99, "-53kg", "men", FALSE),
                new WeightClass(10, 58.99, "-59kg", "men"),
                new WeightClass(11, 65.99, "-66kg", "men"),
                new WeightClass(12, 73.99, "-74kg", "men"),
                new WeightClass(13, 82.99, "-83kg", "men"),
                new WeightClass(14, 92.99, "-93kg", "men"),
                new WeightClass(15, 104.99, "-105kg", "men"),
                new WeightClass(16, 119.99, "-120kg", "men"),
                new WeightClass(17, 120.00, "120+kg", "men"),
            );
        }

        public function getAll()
        {
            return $this->weightClasses;
        }
    }