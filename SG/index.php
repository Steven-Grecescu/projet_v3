<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "Controller/ArticleController.php";
$ArticleController = new ArticleController;
session_start();
try{
    if(empty($_GET['page'])){
        require_once "Views/accueil.view.php";
    }else{
        $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
        // echo "<pre>";
        // print_r($url);
        // echo "</pre>";
        switch($url[0]){
            case "accueil" : require_once "Views/accueil.view.php";

            break;
    
            case "crud"  : //&& $_SESSION['nom']==="admin" : // <-- A rajouter en enlevant les deux point devant crud
                if(empty($url[1])){
                    $ArticleController->afficherArticles();
                    break;
                }else if($url[1] === "l"){
                    $ArticleController->afficherArticle(intval($url[2]));
                    break;
                }else if($url[1] === "a"){
                    $ArticleController->ajoutArticle();
                    break;
                }else if($url[1] === "m"){
                    $ArticleController->modificationArticle($url[2]); 
                    break; 
                }else if($url[1] === "s"){
                    $ArticleController->suppressionArticle($url[2]);
                    break;
                }else if($url[1] === "av"){
                    $ArticleController->ajoutArticleValidation();
                    break;
                }else if($url[1] === "mv"){
                    $ArticleController->modifArticleValidation();
                    break;
                }else{
                    throw new Exception("La page n'existe pas");
                }
            
            case "homme" :
                require_once "Views/homme.php";

            break;
            case "femme":
                require_once "Views/femme.php";
            break;
            case "fille":
                require_once "Views/fille.php";
            break;
            case "garçon":
                require_once "Views/garcon.php";
            break;
            case "panier":
                require_once "Views/panier.view.php";
            break;
            case"login":
                require_once "Views/login.view.php";
            break;
            case"register":
                require_once "Views/register.view.php";
            break;
            case"compte":
                require_once "Views/compte.view.php";
            break;
           
            default: throw new Exception("La page n'existe pas");
            }
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    