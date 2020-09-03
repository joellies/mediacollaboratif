<?php

require_once "connect.php";

$sql = 'SELECT * FROM articles';

$statement = $conn->prepare($sql);

$statement->execute();

$articles = $statement->fetch(PDO::FETCH_OBJ);

//attention pas oublier la gestion des erreurs

?>

<div class="indexArticles">
  <table class="listeArticles">
    <tr>
      <th>Titre</th>
      <th>Contenu</th>
      <th>Date</th>
      <th>Image</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php foreach ($articles as $value) echo $value; ?>
    <tr>
      <td><?= $articles->article_titre; ?></td>
      <td><?= $articles->article_contenu; ?></td>
      <td><?= $articles->article_date; ?></td>
      <td><?= $articles->article_image; ?></td>
      <td><a href="">Modifier</a>
      <td><a href="">Supprimer</a>
  </table>
</div>