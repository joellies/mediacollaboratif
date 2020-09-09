<?php

require_once "../db/db.php"; 

if(isset($_POST["article_id"]))
{
    $sql = "DELETE FROM `ARTICLES` WHERE  `article_id` =:aritcleid";

    $stmt = $prepare($sql);

    $executeSql = [
        ":articleid" => $article_id
    ]
    $res = $stmt->execute($executeSql);

    var_dump($res);
}



