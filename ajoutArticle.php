<?php

include_once 'connect.php';

//Message success post article
if (isset($_POST['article_titre']) && isset($_POST['article_contenu']) && isset($_POST['article_image'])) {
  echo "";
} else {
  echo "Merci de remplir tous les champs";
}

//Déclaration des variables

$article_titre = $_POST['article_titre'];
$article_contenu = $_POST['article_contenu'];
$article_image = $_POST['article_image'];

//Insertion données dans DB

$sql = 'INSERT INTO articles(article_titre, article_contenu, article_image) VALUES(:article_titre, :article_contenu, :article_image)';

//Prepare

$statement = $conn->prepare($sql);

//Execute et afficher // Attention ne pas oublier de sécuriser avec specialcharac & strip tags


if ($statement->execute([':article_titre' => $article_titre, ':article_contenu' => $article_contenu, ':article_image' => $article_image])) {
  echo 'Votre article a été publié';
} else echo 'Erreur';