<?php

require_once ROOT_PATH . '/init/init.php';

class UserController {
    
    public function getUser($id) {
        $db = Database::getInstance();
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $db->pdo->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    
    public function register(User $user) {
        
    }
    
    public function login(User $user) {
        
    }
    
    public function isLoggedIn(User $user) {
        
    }
    
    public function logOut(User $user) {
        
    }
}