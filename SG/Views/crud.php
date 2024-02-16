<?php ob_start();

$content = ob_get_clean();
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Views/template.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models/Article.class.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models/Model.class.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models\ArticleManager.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Controller/ArticleController.php";

require_once "template.php";
require_once "index.php";
require_once "Models/Article.class.php";
require_once "Models/Model.class.php";
require_once "Models/ArticleManager.php";
require_once "Controller/ArticleController.php";
?>
<link rel="stylesheet" href="/public/style.css">

<main>
    <table>
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Taille</th>
            <th>Prix</th>
            <th>Genre</th>
            <th>Type</th>
            <th>Description</th>
            <th>Ref</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>

        <!-- J'ai ajouté ça -->
        <?php
        $articleManager = new ArticleManager();
        $articleManager->chargementArticle();
        $articles = $articleManager->getArticle();
        ?>

    <?php for($i=0;$i<count($articles);$i++) : ?>

        <tr>
            <td><img src="../public/images/<?= $articles[$i]->getImageArticle(); ?>" alt="<?= $articles[$i]->getImageArticle(); ?>"></td>
            <td><a href="<?= URL ?>crud/l/<?= $articles[$i]->getIdArticle();?>"><?= $articles[$i]->getNomArticle();?></a></td>
            <td><?= $articles[$i]->getTailleArticle(); ?></td>
            <td><?= $articles[$i]->getPrixArticle();?></td>
            <td><?= $articles[$i]->getGenreArticle();?></td>
            <td><?= $articles[$i]->getTypeArticle();?></td>
            <td><?= $articles[$i]->getDescriptionArticle(); ?></td>
            <td><?= $articles[$i]->getRefArticle();?></td>
                <form method="POST" action="<?= URL ?>crud/s/<?=$articles[$i]->getIdArticle();?>"onSubmit="return confirm('Voulez vous vraiment supprimer l'article ?');">
                <td><button type="submit">Supprimer</button></td>
                </form>
                <td><a href="<?= URL?>crud/m/<?=$articles[$i]->getIdArticle();?>"><button>Modifier</button></a></td>
        </tr>

        <?php endfor; ?>
    </table>
    <a href="<?= URL ?>crud/a"><button>Ajouter</button></a>
    <?php ?>
</main>

</body>
</html>