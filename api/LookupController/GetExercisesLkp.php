<?php
    require "../services/ExerciseService.php";
    require "../core.php";

    $service = new ExerciseService();
    $exercises = $service->getAll();
    createResponse($exercises);