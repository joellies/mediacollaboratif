<?php

include_once 'connect.php';

//Message success post article

isset($_POST['article_titre']) && isset($_POST['article_contenu']) && isset($_POST['article_image'])) {
  echo "Votre article a été publié";
} else echo "Votre article n'a pas été publié";

//Déclaration des variables

$article_titre = $_POST['article_titre'];
$article_contenu = $_POST['article_contenu'];
$article_image = $_POST['article_image'];

//Insertion données dans DB

$sql = 'INSERT INTO articles(article_titre, article_contenu, article_image) VALUES(:article_titre, :article_contenu, :article_image)';

//Prepare

$statement = $conn->prepare($sql);

if ($statement->execute([':article_titre' => $article_titre, ':article_contenu' => $article_contenu, ':article_image' => $article_image])) {
  echo 'Ok';
}