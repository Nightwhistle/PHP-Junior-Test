<?php

require_once ROOT_PATH . '/init/init.php';

Class User {
    private $username,
            $password,
            $date,
            $lastLogged;
    public  $isLogged = false; 
}