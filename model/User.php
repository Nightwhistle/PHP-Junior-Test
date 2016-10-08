<?php

require_once ROOT_PATH . '/init/init.php';

Class User {
    private $username,
            $password,
            $date,
            $lastLogged;
    public  $isLogged = false;
    
    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getDate() {
        return $this->date;
    }

    function getLastLogged() {
        return $this->lastLogged;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setLastLogged($lastLogged) {
        $this->lastLogged = $lastLogged;
    }


}