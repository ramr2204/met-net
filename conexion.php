<?php
$link = 'mysql:host=localhost;dbname=net'; 
$usuario = 'root';
$pass = '';

try{

    $pdo = new PDO($link,$usuario,$pass);

    //echo 'conectado ';
    
   // foreach($pdo->query('SELECT * FROM `usuario`') as $row) {
     //   print_r($row);
   // }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


