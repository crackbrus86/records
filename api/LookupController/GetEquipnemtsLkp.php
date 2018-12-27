<?php
    require "../services/EquipmentService.php";
    require "../core.php";

    $service = new EquipmentService();
    $equipments = $service->getAll();
    createResponse($equipments);