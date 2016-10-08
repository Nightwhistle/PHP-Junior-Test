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
    
    /**Logging in user passed to function
     * Returns true if logged successfuly
     * Assigning Session values for logged in user
     * 
     * @param User $user
     * @return boolean
     */
    public function login(User $user) {
        $query = "SELECT id, username, password FROM users WHERE username = :username LIMIT 1";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':username', $user->getUsername());
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        
        // If nothing is returned, no such user exists
        if (!$result) return false;
        
        // Checking password against database hash, logs in user if its true
        if (password_verify($user->getPassword(), $result->password)) {
            return true;
        } 
    }
    
    public function isLoggedIn(User $user) {
        
    }
    
    public function logOut(User $user) {
        
    }
}