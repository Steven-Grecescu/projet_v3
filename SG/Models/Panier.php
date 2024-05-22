<?php
require_once "./Model.class.php";
require_once "./Article.class.php";

    // define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
    if (!empty($_POST['idArticle'])){
        print_r("pas vide");
        $idArticle = $_POST['idArticle'];
        session_start();
        $idClient = $_SESSION['idClient'];
        print_r($idArticle);
        print_r($idClient);
        $pdo = new PDO('mysql:host=localhost;dbname=magasin_de_vetements;port=3306;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

        $req = $pdo->prepare('INSERT INTO panier (idClients_Panier, idArticles_Panier) VALUES (:idClients_Panier, :idArticles_Panier)');
        $req->bindValue(':idClients_Panier', $idClient,);
        $req->bindValue(':idArticles_Panier', $idArticle,);

        $resultat = $req->execute();

        // $req2 = $pdo->prepare('SELECT   COUNT(idClients_Panier) AS nbr_doublon, idClients_Panier
        // FROM     panier
        // GROUP BY idClients_Panier
        // HAVING   COUNT(idClients_Panier); ');
        // $resultat2 = $req2->execute();

        
    }
    else{
        print_r("vide");
        
    }


