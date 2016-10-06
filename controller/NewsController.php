<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Sergej
 */

require_once ROOT_PATH . '/init/init.php';


class NewsController {
    private $db;
    private $limit;
    private $page;
    private $total;
    private $last;
    private $offset;
    
    public function __construct() {
        $this->db = Database::getInstance();
        $query = "SELECT id FROM news";
        $statement = $this->db->pdo->prepare($query);
        $statement->execute();
        $this->total = count($statement->fetchAll());
    }
    
    public function getNews($limit = 2, $page = 1) {
        $this->limit  = $limit;
        $this->page   = $page;
        $this->offset = $page * $limit;
        $this->last   = ceil($this->total / $limit);
        
        
        $query = "SELECT * FROM news LIMIT :limit OFFSET :offset";
        $statement = $this->db->pdo->prepare($query);
        $statement->bindParam("limit", $this->limit);
        $statement->bindParam("offset", $this->offset);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
    public function getSingleNews($id) {
        $query = "SELECT * FROM news WHERE id = :id";
        $statement = $this->db->pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $result = $statement->fetch();
        var_dump($result);
        return $result;
        
    }
    
    public function getPagination() {
        $pagination = array();
        for ($i = 1; $i <= $this->last; $i++) {
            $pagination[] = $i;
        }
        return $pagination;
    }
}
