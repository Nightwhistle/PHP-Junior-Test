<?php

require_once ROOT_PATH . '/init/init.php';

class UserController {
    
    private $pdo;
    
    public function __construct() {
        $db = Database::getInstance();
        $this->pdo = $db->pdo;
    }
    
    public function getUser($id) {
        $db = Database::getInstance();
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $db->pdo->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    
    /** Registering user passed to function
     * Returning true if register is successful
     * 
     * @param User $user
     * @return boolean
     */
    public function register(User $user) {
        $hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password) VALUES(:username, :password)";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':username', $user->getUsername());
        $statement->bindParam(':password', $hashedPassword);
        if ($statement->execute()) {
            return true;
        }
        return false;
    }
    
    public function login(User $user) {
        
    }
    
    public function isLoggedIn(User $user) {
        
    }
    
    public function logOut(User $user) {
        
    }
}