<?php ob_start();

$content = ob_get_clean();

require_once "Views/template.php";
require_once "Models/Panier.class.php";
require_once "Models/PanierManager.php";


?>
<link rel="stylesheet" href="../Genres/style.css">
<?php $panierManager = new PanierManager();
        $panierManager->chargementPanier();
        $panier = $panierManager->getPanier(); ?>

<div class="table-responsive"
>
    <table
        class="table table-striped table-hover table-borderless table-primary align-middle"
    >
        <thead class="table-light">
            <caption>
                Votre Panier
            </caption>
            <tr>
            <?php for($i=0;$i<count($panier);$i++) : ?>
                <th><?=$panier[$i]->getIdArticle();?></th>

                <?php endfor ?>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr
                class="table-primary"
            >
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
            <tr
                class="table-primary"
            >
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>

