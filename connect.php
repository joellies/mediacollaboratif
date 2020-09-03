<?php

$servername = "localhost";
$dbname = "meco";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername; dbname=meco", $username, $password);

  //On définit le mode d'erreur de PDO sur Exception

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo '';
}
/*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/ catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}