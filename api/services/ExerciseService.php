<?php
require "../models/Exercise.php";

class ExerciseService
{
    private $exercises;

    public function __construct()
    {
        $this->exercises = array(
            new Exercise(1, "squat", "Присідання"),
            new Exercise(2, "bench press", "Жим"),
            new Exercise(3, "deadlift", "Тяга"),
            new Exercise(4, "total", "Сума"),
            new Exercise(5, "bench press (single lift)", "Жим (окрема вправа)")
        );
    }

    public function getAll()
    {
        return $this->exercises;
    }
}