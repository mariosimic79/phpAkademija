<?php

header('Content-Type: text/plain');



$dsn = 'mysql:host=localhost; dbname=phpakademija; charset=utf8';
$username = 'root';
$password = '';

try
{
    $conn = new PDO($dsn, $username, $password);
}
 catch (PDOException $e)
 {
     echo 'Connection failed: '.$e->getMessage();
     exit;
 }
 
 
 $sql = 'SELECT * FROM attendee WHERE id= '. $_GET['id'];
 echo 'SQL:'. $sql . PHP_EOL . PHP_EOL;
 
 $stmt = $conn->query($sql);
 
 echo 'Result: ';
 print_r($stmt->fetchAll());