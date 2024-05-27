<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    
    <h2> <?= $article->getNomArticle() ?> </h2>
    <img id="imgafficher" src="<?= URL ?>../../../public/images/<?= $article->getImageArticle();?>" alt="img">
    <p>Description : <?= $article->getDescriptionArticle(); ?></p>
    <p>Taille : <?= $article->getTailleArticle();?></p>
    <p>Prix : <?= $article->getPrixArticle();?> €  </p>
    <p>Ref : <?= $article->getRefArticle();?></p>
    <form method="POST" action="/Models/Panier.php">
    <input type="number" style="" name="idArticle" value="<?= $article->getIdArticle();?>" >
    <button type="submit">Ajouter au panier</button>
    </form>
</div>

<?php 
$content = ob_get_clean();
require "template.php"; 
?>