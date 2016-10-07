<?php

require_once ROOT_PATH . '/init/init.php';

class News {
    private $title,
            $text,
            $date,
            $user;
    
    function getTitle() {
        return $this->title;
    }

    function getText() {
        return $this->text;
    }

    function getDate() {
        return $this->date;
    }

    function getUser() {
        return $this->user;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setUser($user) {
        $this->user = $user;
    }


}
