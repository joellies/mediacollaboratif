<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Média Collaboratif</title>
  <link rel="stylesheet" href="./assets/css/style-landing.css" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <?php
  define("PATH","./"); 
  include PATH."includes/header.php"; 
  require_once "./db/db.php";

  $sql = 'SELECT * FROM articles ORDER BY article_date DESC';

$statement = $conn->prepare($sql);

$statement->execute();

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

  ?>
  <div class="container">
    <div class="container__mainContent">
      <div class="container__mainContent--destop">
        <h2>Notre sélection pour vous</h2>
        <div class="container__mainContent__destop--contenu">
          <div class="container__mainContent__destop--colonne1">
            <div class="container__mainContent__destop__colonne1--text">
              <h4>Design</h4>
              <p>
                Comment bien choisir ses familles
                <br />
                polices pour son projet web ?
              </p>
              <div class="datePublication">28 Aout 2020</div>
            </div>
            <div class="container__mainContent__destop__colonne1--image">
              <img class="article" src="assets/images/Image-article-1-landing-page.png" />
              <div class="cercle">
                <img class="auteur" src="assets/images/John-Doe.png" />
              </div>
            </div>
          </div>
          <div class="container__mainContent__destop--colonne2">
            <div class="container__mainContent__destop__colonne2--text">
              <h4>Développement web</h4>
              <p>
                5 soft skills que chaque web développeur
                <br />
                développer en 2020
              </p>
              <date>26 Aout 2020</date>
            </div>
            <div class="container__mainContent__destop__colonne2--image">
              <img class="article" src="assets/images/Image-article-2-landing-page.png" />
              <div class="cercle">
                <img class="auteur" src="assets/images/Jane-Doe.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="derniersArticles">Les derniers articles publiés</h2>
      <aside>
        <div class="container__mainContent--destop">
          <p>Auteur.e à la une</p>
          <div class="aLaUne">
            <img src="assets/images/Jane-Doe.png" alt="" />
            <p><a href="">Jane Doe</a></p>
          </div>
          <p>
            2 articles publiés
            <br />
            cette semaine
          </p>
          <a href="decouvrir">Découvrir</a>
        </div>
      </aside>
      <div class="container__mainContent--articles">
        <!--  -->
        <div class="container__mainContent__articles--first">

          <img src="assets/images/Image-article-3-landing-page.png" />
          <div class="description">
            <h2 class="titre"><a href="#"><?= $articles[0]["categorie_nom"] ?></a></h2>
            <p class="container__mainContent--destop">
            <?= $articles[0]["article_titre"] ?>
            </p>
            <div class="description--sections">
              <a href="#">
                <img src="assets/images/John-Doe.png" alt="profil de John-Doe" />
              </a>
              <date><?= $articles[0]["article_date"] ?></date>
              <a class="categorie" href="#">Catégorie</a>
            </div>
          </div>
        </div> 
      <!-- -->
        <div class="container__mainContent__articles--first">
          <img src="assets/images/Image-article-4-landing-page.png" />
          <div class="description">
            <h2 class="titre"><a href="#">Créativité</a></h2>
            <p class="container__mainContent--destop">
              Développer sa créativité à l’aide d’une méthode
            </p>
            <div class="description--sections">
              <a href="#">
                <img src="assets/images/Jane-Doe.png" alt="profil de Jane" />
              </a>
              <date>25 aout 2020</date>
              <a class="categorie" href="#">Catégorie</a>
            </div>
          </div>
        </div>
        <aside>
          <div class="container__mainContent--destop">
            <p>Catégories à découvrir</p>
            <div class="lienCategories">
              <a href="#">Design</a>
              <a href="#">Web developpement</a>
              <a href="#">Collaboration</a>
            </div>
            <a href="#">Toutes les catégories</a>
          </div>
        </aside>
        <div class="container__mainContent__articles--first">
          <img src="assets/images/Image-article-5-landing-page.png" />
          <div class="description">
            <h2 class="titre"><a href="#">Rédaction</a></h2>
            <p class="container__mainContent--destop">
              5 outils pour rédiger efficacement pour le web
            </p>
            <div class="description--sections">
              <a href="#">
                <img src="assets/images/John-Doe.png" alt="profil de l'auteur" />
              </a>
              <date>27 aout 2020</date>
              <a class="categorie" href="#">Catégorie</a>
            </div>
          </div>
        </div>
        <div class="container__mainContent__articles--first">
          <img src="assets/images/Image-article-6-landing-page.png" />
          <div class="description">
            <h2 class="titre"><a href="#">Carrière</a></h2>
            <p class="container__mainContent--destop">
              Devenir web développeur mobile
            </p>
            <div class="description--sections">
              <a href="#">
                <img src="assets/images/Jane-Doe.png" alt="profil de l'auteur" />
              </a>
              <date>29 aout 2020</date>
              <a class="categorie" href="#">Catégorie</a>
            </div>
          </div>
        </div>
      </div>
      <div class="icons">
        <img src="/assetsimages/home-icon.png" />
        <img src="images/rechercher-icone.png" />
        <img src="images/plus-icon.png" />
        <img src="images/profile-icon.png" />
      </div>
    </div>
  </div>
  <?php include "./includes/footer.php"; ?>
</body>

</html>