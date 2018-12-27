<?php
    require "../services/WeightClassService.php";
    require "../core.php";

    $service = new WeightClassService();
    $weightClasses = $service->getAll();
    createResponse($weightClasses);