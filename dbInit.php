<?php
    global $wpdb;
    $charset_collate = "DEFAULT CHARSET SET {$wpdb->charset} COLLATE {$wpdb->collate}";
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");

    $prefix = $wpdb->get_blog_prefix() . "rec_";