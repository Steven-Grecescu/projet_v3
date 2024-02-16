<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title></title>
</head>

<body>
<?php

        $articleManager = new ArticleManager();
        $articleManager->chargementArticle();
        $articles = $articleManager->getArticle();
        ?>
    <header>
        <div>
            <a href="/accueil"><img srcset="/public/images/Logo_Small.jpg 384w, /public/images/Logo_Medium.jpg 768w, /public/images/Logo.jpg 1920w" sizes="(max-width:1920px) 384px,768,1920px" src="/public/images/Logo.jpg" alt="Logo"></a>
        </div>
        <input placeholder="Effectuer une recherche...">
        <div>
            <a href="panier"><img src="/public/images/panier.png" alt=""></a>
        </div>
        <section class="showcase">
      <div class="menu">
        <ul>
          <a href="/compte">Compte de <?= $_SESSION['nom'] ?></a>
          <a href="/accueil">Accueil</a>
          <a href="/homme">Homme</a>
          <a href="/femme">Femme</a>
          <a href="/garçon">Garçon</a>
          <a href="/fille">Fille</a>
          <a href="/panier">Panier</a>
          <?php if($_SESSION['nom']=="admin"){

           ?>
              <a href="crud">GESTION DU STOCK</a>
              <?php }?>
         
          <button class="closeMenu">X</button>
        </ul>
      </div>
    </section>
    <a href="login"><img src="/images/icons8-login-50.png" alt=""></a>
        <button class="btn">Menu</button>
    </header>

    <script src="/script.js"> </script>
<?= $content ?>