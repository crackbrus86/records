<?php
    require "../services/RegionService.php";
    require "../core.php";

    $service = new RegionService();
    $regions = $service->getAll();
    createResponse($regions);