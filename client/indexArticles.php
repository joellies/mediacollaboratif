<?php

require_once "../db/db.php";

$sql = 'SELECT * FROM articles';

$statement = $conn->prepare($sql);

$statement->execute();

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

//attention pas oublier la gestion des erreurs

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index articles</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/articles.css">
  <link href=" https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <div class="menu">
    <a href=""><img src="/images/home-icon.png"></a>
    <a href=""><img src="/images/rechercher-icone.png"></a>
    <a href=""><img src="/images plus-icon.png"></a>
    <a href=""><img src="/images/profile-icon.png"> </a>
  </div>
  <h1>Liste des articles</h1>
  <?php foreach ($articles as $value) {
  ?>

  <div class=" listeArticles">
    <div class="imageContent">
      <?php
        echo "<embed src='data:" . $value["image_type"] . ";base64," . base64_encode($value['article_image']) . "'width='200'/>";  ?>
    </div>
    <div class="detailsContent">
      <a class="hoverArticle" href="..\server\article\readArticle.php?id=<?= $value['article_id']; ?>">
        <div class="detailsArticleTitre"><?= $value['article_titre']; ?></div>
      </a>
      <div class="detailsArticleDate"><?= $value['article_date']; ?></div>

      <div class="btnChangeArticle">
        <div class="btnModifier"><a href="">Modifier</a></div>
        <div class="btnSupprimer"><a href="../server/article/Delete_article.php?id=<?=$value['article_id'];?>">Supprimer</a></div>
      </div>
    </div>
  </div>
  </div>
  <?php
  };
  ?>
  </div>
</body>

</html>