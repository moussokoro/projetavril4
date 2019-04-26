

<?php
if( session_status() == PHP_SESSION_NONE){
    session_start();
  }
$host = "localhost";
$dbName = "projetavril";
$user = "root";
$password = "";

try{
    $pdo = new PDO('mysql:dbname='.$dbName.';host='.$host, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

catch(Exception $e){
     die("ERROR : ". $e->getMessage());
      return $pdo;
}


   


