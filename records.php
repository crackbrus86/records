<?php
/*
Plugin Name: UPF Records
Description: UPF records table
Version: 1.0
Author: Salivon Eugene
*/
define('RECORDS_DIR', plugin_dir_path(__FILE__));
add_action("admin_menu", array("UPFRecords", "initSettings"));

class UPFRecords{
    public static $appBuild = "1.0(12.26.18)";

    public function initSettings(){
        add_menu_page("UPF Records", "Рекорди ФПУ", "manage_options", "upf-records", array("UPFRecords", "editRecords"));
    }

    public function loadEditRecordsApp(){
        wp_register_script('edit_records_bundle', plugins_url('/dist/editRecords-bundle.js?v=' . $appBuild, __FILE__));
        wp_enqueue_script('edit_records_bundle');
    }

    public function editRecords(){
        UPFRecords::loadEditRecordsApp();
        $output = <<<_END
        <div class="container-fluid">
            <h2>Рекорди ФПУ</h2>
            <div id="app"></a>
        </div>
_END;
       echo $output; 
    }
}
?>