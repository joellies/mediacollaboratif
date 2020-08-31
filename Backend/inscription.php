<?php
//inclure le fichier de connexion pour appliquer les requet sql sur ce db
require_once "DbConnexion/db.php";


  
//avant d'inserer nos données on doit verifer si les varaible global POST n'est pas vide
//AND not NULL 
//isset() va retourner FALSE(0) si la variable est NULL.
//strip_tags() 
//$new_string=trim($string_name);
if(
    !isset(
        $_POST["userFirstname"],
        $_POST["userName"],
        $_POST["userMail"],
        $_POST["userPassword"])
        )
{
    header("Location:../inscription.html?status=100")  ;
}else {

    if(empty($_POST["userPassword"]),empty($_POST["userPassword"]),empty($_POST["userPassword"]))
    //securiser les données contre l'injection sql

    //Hasher le mot de passe pour que ce soit pas visible 

    //à la fin on insert les données
    try{
    $stmt = $conn->prepare("INSERT INTO `utilisateurs` ( `user_prenom`, `user_nom`, `user_email`, `user_mdp`)
    VALUES (:user_prenom ,:user_nom , :user_email, :user_mdp)");
    $stmt->bindParam(':user_prenom', $_POST["userFirstname"]);
    $stmt->bindParam(':user_nom', $_POST["userName"]);
    $stmt->bindParam(':user_email', $_POST["userMail"]);
    $stmt->bindParam(':user_mdp', $_POST["userPassword"]);

    $stmt->execute();

    header("Location:../inscription.html?status=200")  ;

    }catch( PDOException $e ) {

        echo $e->getMessage();
    }


}



