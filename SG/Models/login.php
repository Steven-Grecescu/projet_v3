<?php
require_once "./Model.class.php";

// define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    $email = $_POST['email'];
    $password = $_POST['mdp'];
 
    var_dump($email);
    var_dump($password);

    $pdo = new PDO('mysql:host=localhost;dbname=magasin_de_vetements;port=3308;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    $req = $pdo->prepare('SELECT * FROM clients WHERE email_Clients = :email_Clients');
    $req->bindValue(':email_Clients', $email);
    // $req->bindValue(':pwd_Clients', $password);
    $req->execute();
    $resultat = $req->fetch(PDO::FETCH_ASSOC);
    
    var_dump($resultat);
    
    if($resultat){
        $passwordHash = $resultat['pwd_Clients'];
        if(password_verify($password,$passwordHash)){
            echo "Connexion réussi";
            

            session_start();
            $_SESSION['idClient'] = $resultat['idClients_Clients'];
            $_SESSION['nom'] = $resultat['nom_Clients'];
            $_SESSION['prenom'] = $resultat['prenom_Clients'];
            $_SESSION['email'] = $resultat['email_Clients'];
            $_SESSION['adresse'] = $resultat['Adresse_Clients'];
            $_SESSION['tel'] = $resultat['tel_Clients'];
            header('Location: '. "/accueil");

        }else{
            echo "Identifiant invalides";
        }
    }else{
        echo "Identifiant invalides";
    }
}

echo "$_SESSION[nom]";
