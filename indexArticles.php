<?php

require_once "connect.php";

$sql = 'SELECT * FROM articles';

$statement = $conn->prepare($sql);

$statement->execute();

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

//attention pas oublier la gestion des erreurs

?>

<div class="indexArticles">
  <table class="listeArticles">
    <tr>
      <th>Image</th>
      <th>Titre</th>
      <th>Contenu</th>
      <th>Date</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($articles as $value) {
    ?>
    <tr>
      <td><?= $value['article_image']; ?></td>
      <td><?= $value['article_titre']; ?></td>
      <td><?= $value['article_contenu']; ?></td>
      <td><?= $value['article_date']; ?></td>
      <td><a href="">Afficher</a><a href="">Modifier</a><a href="">Supprimer</a>
      </td>
    </tr>
    <?php
    };
    ?>

  </table>
</div>