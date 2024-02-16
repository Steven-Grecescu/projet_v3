<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    
    <h2> <?= $articles->getNomArticle() ?> </h2>
    <img id="imgafficher" src="<?= URL ?>../../../public/images/<?= $articles->getImageArticle();?>" alt="img">
    <p>Desccription : <?= $articles->getDescriptionArticle(); ?></p>
    <p>Taille : <?= $articles->getTailleArticle();?></p>
    <p>Prix : <?= $articles->getPrixArticle();?> €  </p>
    <p>Ref : <?= $articles->getRefArticle();?></p>
    <form method="POST" action="/Models/Panier.php">
    <input type="number" style="" name="idArticle" value="<?= $articles->getIdArticle();?>" >
    <button type="submit">Ajouter au panier</button>
    </form>
</div>

<?php 
$content = ob_get_clean();
require "template.php"; 
?>