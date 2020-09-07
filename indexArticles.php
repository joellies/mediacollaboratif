<?php

require_once "connect.php";

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
  <link rel="stylesheet" type="text/css" href="indexArticles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

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

  <div class=" listArticles">

    <div class="leftContent">
      <div class="articleImage"><?= $value['article_image']; ?></div>
    </div>
    <div class="rightContent">
      <div class=" articleTitre"><?= $value['article_titre']; ?></div>
      <div class="articleDate"><?= $value['article_date']; ?></div>
      <div class="btnChangeArticle">
        <div class="btnModifier"><a href="modifier-article.php?id=<? $articles->id?>">Modifier</a>
        </div>
        <div class="btnSupprimer"><a href="supprimer-article.php?id=<? $articles->id?>">Supprimer</a></div>
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