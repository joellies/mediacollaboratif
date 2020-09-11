<?php
//inclure le fichier de connexion pour appliquer les requet sql sur ce db
require_once "../../db/db.php";

//isset() va retourner FALSE(0) si la variable est NULL.
if (
  !isset($_POST["userMdp"],
  $_POST["userMail"])
) {
  header("Location:../connexion.php?status=100");
} else {
  //avant d'inserer nos données on doit verifer si les varaible global POST n'est pas vide

  if (
    empty($_POST["userMail"]) || empty($_POST["userMdp"])
  ) {
    header("Location:../connexion.php?status=300");
  } else {
    try {
      $userMail = trim($_POST["userMail"]);
      $userMdp = trim($_POST["userMdp"]);

      $stmt = $conn->prepare("SELECT * FROM `utilisateurs` WHERE user_email=:user_email
                AND user_mdp=:user_mdp");
      $stmt->execute(['user_email' => $userMail, 'user_mdp' => $userMdp]);
      $user = $stmt->fetch();

      if (!$user) {
        echo "the user is not exist";
      } else {
        //if the user is connected then :
        $userid = $user["user_id"];
        var_dump($userid);

        header("Location:./article/ajouteArticle.php?userid=$userid");
      }
    } catch (PDOException $e) {

      echo $e->getMessage();
    }
  }
}