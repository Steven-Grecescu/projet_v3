<?php ob_start();

$content = ob_get_clean();

require_once "Views/template.php";
require_once "Models/Panier.class.php";
require_once "Models/PanierManager.php";
// require_once "Controllers/ArticleController.php";


?>
<link rel="stylesheet" href="../Genres/style.css">
<?php $panierManager = new PanierManager();
        $panierManager->chargementPanier();
        $panier = $panierManager->getPanier(); 

        $ArticleController = new ArticleController;

    
        
?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .table-container {
            margin: 20px;
            overflow-x: auto;
        }
        .article-image {
            max-width: 100px; /* Vous pouvez ajuster la taille ici */
            max-height: 100px; /* Vous pouvez ajuster la taille ici */
        }
    </style>
<div class="table-container">
    <table class="">
        <thead class="table-light">
            <caption>Votre Panier</caption>
            <tr>
                <th>Article</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($panier as $articlePanier): ?>
                <tr class="table-primary">
                    <td><?= ($ArticleController->afficherArticlePanier($articlePanier->getIdArticle())) ?></td>
                    <td><?= ($articlePanier->getQuantierPanier()) ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

