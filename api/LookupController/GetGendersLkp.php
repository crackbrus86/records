<?php
    require "../services/Gender.php";
    require "../core.php";

    $service = new GenderService();
    $genders = $service->getAll();
    createResponse($genders);