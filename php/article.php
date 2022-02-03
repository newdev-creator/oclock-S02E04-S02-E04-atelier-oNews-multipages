<?php

  // Chargement de la liste de tout mes articles
  include "./data/articles.php";
  require "./action/functions.php";
  //var_dump($articles);die;

  // Chargement des templates
  include "./inc/head.php";
  include "./inc/body.php";

  // J'execute ma fonction en remplissant son tiroir avec l'article 1
  displayArticle($articles[$_GET['id']]);



?>

<?php include "./inc/footer.php"; ?>

