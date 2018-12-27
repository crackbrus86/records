<?php
    require "../services/DivisionService.php";
    require "../core.php";

    $service = new DivisionService();
    $divisions = $service->getAll();
    createResponse($divisions);

