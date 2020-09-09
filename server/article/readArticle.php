<?php

require_once "../../db/db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {

  $article_id = strip_tags($_GET['id']);
  // On écrit notre requête
  $sql = 'SELECT * FROM `articles` WHERE `article_id`=:article_id';

  // On prépare la requête
  $statement = $conn->prepare($sql);

  // On attache les valeurs
  $statement->bindValue(':article_id', $article_id, PDO::PARAM_INT);

  // On exécute la requête
  $result = $statement->execute();
  // On stocke le résultat
  $article = $statement->fetch();

  if (!$article) {
    header('Location: indexArticles.php');
  }
}

/* s */?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Article</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/articles.css">
  <link href=" https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div class="articleContent">
    <div class="articleID"><?= $article['article_id']; ?></div>
    <div class="articleCategorie"><?= $article['categorie_nom']; ?></div>
    <div class="articleTitre"><?= $article['article_titre']; ?></div>
    <div class="articleAuteur"><?= $article['user_id']; ?></div>
    <div class="articleDate"><?= $article['article_date']; ?></div>

    <div class="articleImage"><?php
        echo "<embed src='data:" . $article["image_type"] . ";base64," . base64_encode($article['article_image']) . "'width='200'/>";  ?></div>
    <div class="articleContenu"><?= $article['article_contenu']; ?></div>
  </div>

  <footer>
    <p><a href="">À propos</a></p>
    <p><a href="">Conditions d'utilisation</a></p>
    <p><a href="">Contact</a></p>
    <p>© 2020</p>
  </footer>
</body>

</html>