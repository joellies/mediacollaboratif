<?php
//get value from url
$user_id = $_GET["userid"];
/**
 * 500 : user is not connected
 */
if(isset($user_id))
{
    
}else{
    header("Location:../../connexion.php?status=500");
}

