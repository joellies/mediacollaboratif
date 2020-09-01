<?php
//inclure le fichier de connexion pour appliquer les requet sql sur ce db
require_once "db.php";

//isset() va retourner FALSE(0) si la variable est NULL.
if(
    !isset(
        $_POST["userFirstname"]
        )
)
{
    header("Location:../inscription.html?status=100")  ;
}else {
            try{

            $stmt = $conn->prepare(
                    "INSERT INTO `utilisateurs` ( `user_prenom`) VALUE (:user_prenom )"
                                  );
            $stmt->bindParam(':user_prenom', $userFirstname);            
            //remplir les données
            $userFirstname =trim($_POST["userFirstname"]) ;
            //executer la requet
            $stmt->execute();
            
            header("Location:./inscription.html?status=200")  ;

            }catch( PDOException $e ) {

                echo $e->getMessage();
            }
    }





