<?php 

class PanierManager extends BDConnexion{
    private $panier;
    public function ajoutArticle($paniers){
        $this->panier[] = $paniers;
    }

    public function getPanier(){return $this->panier;}
    public function chargementPanier(){
        $req = $this->getBDD()->prepare('SELECT * FROM panier');
        $req->execute();
        $mesArticlesPaniers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesArticlesPaniers as $value){
            $art = new Panier($value['idPanier_Panier'],$value['idClients_Panier'],$value['idArticles_Panier'],$value['quantiterArticles_Panier'],$value['commande_idcommande_commande']);
            $this->ajoutArticle($art);

        }
    }
    }
