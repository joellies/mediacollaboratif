<?php

try {

  $connexion = new PDO("mysql:host=localhost;dbname=mediacollaborative", "root", "");
  echo "connexion ok";
} catch (PDOException $e) {
  echo $e->getMessage();
}