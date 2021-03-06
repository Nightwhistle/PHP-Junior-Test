<?php

session_start();

require_once '/../config/config.php';



spl_autoload_register(function ($class_name) {
    $classFolders = ['model',
                     'view',
                     'controller'];
    foreach ($classFolders as $folder) {
        
        $file = ROOT_PATH . '/' . $folder . '/' . $class_name . '.php';
        if (!file_exists($file)) {
            continue;
        }
        include $file;
    }
});
