<?php 
class Panier{
    private $idPanier;
    private $idClients;
    private $idArticles;
    private $quantiter;
    private $commande;


    public function __construct($idPanier,$idClients,$idArticles,$quantiter,$commande)
    {
        $this->idPanier = $idPanier;
        $this->idClients = $idClients;
        $this->idArticles = $idArticles;
        $this->quantiter = $quantiter;
        $this->commande = $commande;

    }

    public function getIdPanier(){return $this->idPanier;}
    public function getIdClients(){return $this->idClients;}
    public function getIdArticle(){return $this->idArticles;}
    public function getQuantierPanier(){return $this->quantiter;}
    public function getCommandePanier(){return $this->commande;}


    public function setIdPanier($idPanier){$this->idPanier = $idPanier;}
    public function setIdClients($idClients){$this->idClients = $idClients;}
    public function setIdArticle($idArticles){$this->idArticles = $idArticles;}
    public function setQuantierPanier($quantiter){$this->quantiter = $quantiter;}
    public function setCommandePanier($commande){$this->commande = $commande;}


}