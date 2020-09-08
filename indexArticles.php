<?php

require_once "connect.php";

$sql = 'SELECT * FROM articles';

$statement = $conn->prepare($sql);

$statement->execute();

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index articles</title>
  <link rel="stylesheet" type="text/css" href="articles.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <div class="menuPrincipal">
      <a href=""><img src="/images/home-icon.png"></a>
      <a href=""><img src="/images/rechercher-icone.png"></a>
      <a href=""><img src="/images plus-icon.png"></a>
      <a href=""><img src="/images/profile-icon.png"> </a>
    </div>
  </header>
  <div class="userInfo">
    <div class="userImage"><img src="/images/Jane-Doe.png"></div>
    <div class="lienModifierProfil"><a href="">Modifier profil</a></div>
  </div>
  <hr width="40%" size="2">
  <h1>Liste des articles</h1>
  <?php foreach ($articles as $value) {
  ?>
  <div class=" listeArticles">
    <div class="imageContent">
      <div class="articleImage"><?= $value['article_image']; ?></div>

    </div>
    <div class="detailsContent">
      <a class="hoverArticle" href="readArticle.php?id=<?= $value['article_id']; ?>">
        <div class="detailsArticleTitre"><?= $value['article_titre']; ?></div>
      </a>
      <div class="detailsArticleDate"><?= $value['article_date']; ?></div>
      <div class=" btnChangeArticle">
        <div class="btnModifier"><a href=".php?id=<?= $value['article_id']; ?>">Modifier</a>
        </div>
        <div class="btnSupprimer"><a href=".php?id=<?= $value['article_id']; ?>">Supprimer</a></div>
      </div>
    </div>
  </div>
  </div>
  <?php
  };
  ?>

  <footer>
    <p><a href="">À propos</a></p>
    <p><a href="">Conditions d'utilisation</a></p>
    <p><a href="">Contact</a></p>
    <p>© 2020</p>
  </footer>
</body>

</html>