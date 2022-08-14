<?php
// the below for local database development
// $host = 'localhost';
// $db ='birthdaydb';
// $user = 'root';
// $pass= '';
// $charset = 'utf8mb4';
// $dsn = "mysql:host=$host; dbname=$db; charset=$charset";

//the below for connecting to a remote database

$host = 'remotemysql.com';
$db ='WhzSxu5J0s';
$user = 'WhzSxu5J0s';
$pass= 'VWmgcmKFBs';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}

require_once 'crud.php';
$crud = new Crud($pdo);

?>