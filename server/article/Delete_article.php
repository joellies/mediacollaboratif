<?php
/**
 * @rachel
 */
require "../../db/db.php";


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);

    $sql = "DELETE FROM `articles` WHERE `article_id`=:id;";

    $query = $conn->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

echo "DELETED";
}

/* require_once('close.php');
 */
