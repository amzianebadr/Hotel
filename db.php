<?php
$user="root";
$pd="";
$url="mysql:host=localhost;dbname=hotel_pdo";
try{
    $db=new PDO($url,$pd,$url);
} catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
}
?>