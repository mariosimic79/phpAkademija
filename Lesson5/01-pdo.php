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
 
 $sql = 'SELECT * FROM attendee';
 
 $stmt = $conn->query($sql);
 
 
 
 /* fetch() hvata red po red
 while ($row = $stmt->fetch())
 {
    print $row['id']. "\t";
    print $row['name']."\t";
    print $row['email']."\n";
 }
  * 
  *
   */
  
 //fetchAll() hvata sve redove od jednom
// foreach ($stmt->fetchAll() as $row)
// {
//    print $row['id']. "\t";
//    print $row['name']."\t";
//    print $row['email']."\n"; 
// }
 
 
 //isto moiguće za koristiti
foreach ($stmt as $row)
{
    print $row['id']. "\t";
    print $row['name']."\t";
    print $row['email']."\n";  
}