<?php
require_once "./Model.class.php";

if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['mdp'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['mdp'];
    $password = password_hash($_POST['mdp'],PASSWORD_DEFAULT).
 
    var_dump($nom);
    var_dump($prenom);
    var_dump($adresse);
    var_dump($tel);
    var_dump($email);
    var_dump($password);
 
    $pdo = new PDO('mysql:host=localhost;dbname=magasin_de_vetements;port=3306;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    /*Ici on a une requête qui va nous permettre d'entrer l'email et le mot de passe de l'utilisateur */
    $req = $pdo->prepare('INSERT INTO clients (nom_Clients, prenom_Clients, adresse_Clients, tel_Clients, email_Clients, pwd_Clients) VALUES (:nom_Clients, :prenom_Clients, :adresse_Clients, :tel_Clients , :email_Clients , :pwd_Clients)');
    $req->bindValue(':nom_Clients', $nom,);
    $req->bindValue(':prenom_Clients', $prenom);
    $req->bindValue(':adresse_Clients', $adresse);
    $req->bindValue(':tel_Clients', $tel);
    $req->bindValue(':email_Clients', $email);
    $req->bindValue(':pwd_Clients', $password);
    $resultat = $req->execute();
 
    if ($resultat) {
        echo "Inscription réussie";
        header('Location: '. "/login");
    }
    else {
        echo "Inscription échouée";
    }
}


