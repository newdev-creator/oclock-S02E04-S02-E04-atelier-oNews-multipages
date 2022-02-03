<?php 
require "./data/articles.php";

include "./inc/head.php"; 
include "./inc/body.php"; 
?>


<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>
<div class="posts">
  <?php
    // Permet de parcourir tout les articles
    foreach ($articles as $key => $article) {
        // On affiche chaque article les un apres les autres
  // On ferme notre balise pour faciliter l'affichage du HTML
  // Sans devoir faire des echo ou des concatenations complexes
  ?>
    <article class="post">
      <a href="" class="post__category post__category<?= $article['categorieClass'] ?>"><?= $article['categorie'] ?></a>
      <h3><?= $article['titre'] ?></h3>
      <div class="post__meta">
        <img class="post__author-icon" src="<?= $article['imageAuteur'] ?>" alt="">
        <strong class="post__author"><?= $article['auteur'] ?></strong>
        <time><?= $article['publicationDate'] ?></time>
      </div>
      <p><?= substr($article['texte'], 0, 50) ?>...</p>
      <!-- On crée une URL qui redirige vers la page article.php avec la clé de l'article correspondants -->
      <a href="article.php?id=<?= $key ?>" class="post__link">Continue reading</a>
    </article>
  <?php
    }
  ?>
</div>

<?php include "./inc/footer.php"; ?>
        