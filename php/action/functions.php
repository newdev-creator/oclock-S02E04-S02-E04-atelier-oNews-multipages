<?php

// On declare une function qui va afficher un article
// Le parametre $article est un tiroir qui va etre rempli par la valeur passée lors de l'éxecution de la fonction
function displayArticle($article)
{
    // $article contient l'article qu'on a passé dans notre argument
    echo "<article class='right__article'>";
        echo "<h1>$article[titre]</h1>";
        echo "<a href='' class='post__category post__category$article[categorieClass]'>$article[categorie]</a>";
        echo "<span class='post__author'>$article[auteur]</span>";
        echo "<img class='post__author-icon' src='$article[imageAuteur]' alt=''>";
        echo "<main>";
            echo "<p>$article[texte]</p>";
            echo "<a href='index.php' class='post__link'>Back to home</a>";
        echo "</main>";
    echo "</article>";


    /*echo '
    <article class="right__article">
        <h1>$articles["article1"]["titre"] </h1>
        <a href="" class="post__category post__category$articles["article1"]["categorieClass"] ">$articles["article1"]["categorie"] </a>
        <span class="post__author">$articles["article1"]["auteur"] </span>
        <img class="post__author-icon" src="$articles["article1"]["imageAuteur"] " alt="">
        <main>
            $articles["article1"]["texte"] 
            <a href="index.php" class="post__link">Back to home</a>
        </main>
    </article>
    ';*/
}