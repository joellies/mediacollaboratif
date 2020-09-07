<?php
//connexion db
require "db.php";
//valeur reçu de la page index de l'attribut name
//requet sql
$sql = "INSERT INTO `utilisateurs` (`user_prenom`) VALUE (:user_prenom)";

//preparer
$stmt = $connexion->prepare($sql);
//binder
$stmt->bindParam(":user_prenom", $_POST["user_prenom"]);
$stmt->execute();