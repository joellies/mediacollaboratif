<?php

require_once "connect.php";

$id = strip_tags($_GET['article_id']);

$sql = 'SELECT * FROM articles WHERE article_id=:article_id';

$statement = $conn->prepare($sql);

$statement->execute(['article_id' => $id]);

$article = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Article</title>
  <link rel="stylesheet" type="text/css" href="indexArticles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <div class="articleID"></div>
  <div class="articleCategorie"></div>
  <div class="articleTitre"></div>
  <div class="articleAuteur"></div>
  <div class="articleDate"></div>
  <div class="articleImage"></div>
  <div class="articleContenu"></div>
</body>

</html>