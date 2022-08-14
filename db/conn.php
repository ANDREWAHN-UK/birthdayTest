<?php

$host = 'localhost';
$db ='birthdaydb';
$user = 'root';
$pass= '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p class = 'text-center '>Database successfully connected</p>";
} catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}

require_once 'crud.php';
$crud = new Crud($pdo);

?>