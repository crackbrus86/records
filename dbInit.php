<?php
    global $wpdb;
    $charset_collate = "DEFAULT CHARSET SET {$wpdb->charset} COLLATE {$wpdb->collate}";
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");

    $prefix = $wpdb->get_blog_prefix() . "rec_";
    $tableRecordsName = $prefix . "record";
    $sql = "CREATE TABLE IF NOT EXISTS {$tableRecordsName} (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        genderId INT NOT NULL,
        equipmentTypeId INT NOT NULL,
        divisionId INT NOT NULL,
        exerciseId INT NOT NULL,
        weightClassId INT NOT NULL,
        athleteName VARCHAR(100),
        regionId INT NOT NULL,
        city VARCHAR(100),
        born INT NOT NULL,
        bodyWeight DECIMAL(5,2),
        result DECIMAL(5,2),
        recordDate DATETIME NOT NULL,
        recordLocation VARCHAR(100),
        recordState INT
    ) {$charset_collate}";
    dbDelta($sql);