<?php

session_start();

require_once '/../config/config.php';

spl_autoload_register(function ($class_name) { 
    $filePath = str_replace('_', '/', $class_name).'.php';
    $file = ROOT_PATH . '/' .$filePath;
    echo $file;
    if ( ! file_exists($file))
    {
        return FALSE;
    }
    include $file;
});