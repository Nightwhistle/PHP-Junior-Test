<?php

require '/init/init.php';
require '/model/Database.php';

$db = Database::getInstance();
var_dump($db);
$query = "SELECT * FROM users";
$statement = $db->pdo->prepare($query);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($row);
