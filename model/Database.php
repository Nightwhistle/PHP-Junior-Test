<?php

class Database {
    /**
     *
     * @var PDO 
     */
    public $pdo;
    private static $instance;
    
    private function __construct() {
        $this->pdo = new PDO('sqlite:'.SQLITE_PATH);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    /**
     * 
     * @return Database
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
        echo "returning instance";
    }
}