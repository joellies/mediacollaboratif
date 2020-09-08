<?php

require_once "connect.php";

if (isset($_GET['article_id']) && !empty($_GET['article_id'])) {

  $article_id = strip_tags($_GET['article_id']);

  // On écrit notre requête
  $sql = 'SELECT * FROM `articles` WHERE `article_id`=:article_id';

  // On prépare la requête
  $statement = $conn->prepare($sql);

  // On attache les valeurs
  $statement->bindValue(':article_id', $article_id, PDO::PARAM_INT);

  // On exécute la requête
  $statement->execute();

  // On stocke le résultat dans un tableau associatif
  $article = $statement->fetch();

  if (!$article) {
    header('Location: indexArticles.php');
  }
} else {
  header('Location: readArticle.php');
}
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

  <div class="articleID"><?= $article['article_id']; ?></div>
  <div class="articleCategorie"><?= $article['categorie_nom']; ?></div>
  <div class="articleTitre"><?= $article['article_titre']; ?></div>
  <div class="articleAuteur"><?= $article['user_id']; ?></div>
  <div class="articleDate"><?= $article['article_date']; ?></div>
  <div class="articleImage"><?= $article['article_image']; ?></div>
  <div class="articleContenu"><?= $article['article_contenu']; ?></div>

</body>

</html>