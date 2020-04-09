<?php

//Connexion à la base de données
function dbConnect()
{
    $dsn = "mysql:host=localhost;dbname=gsbfrais";
    $user = "root";
    $pwd = "";

    try
    {
        $db = new PDO($dsn, $user, $pwd);
        return $db;
    }

    catch (Exception $e)
    {
        die('Connexion échouée ! : '.$e->getMessage());
    }
} 


function sessionStart()
{   
    session_start();
    //Instanciation de la variable db (elle reprend la fonction dbConnect)
    $db = dbConnect();
    //Vérification des champs renseignés par l'utilisateur
    if(isset($_POST['formConnexion'])) 
    {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
            
        if(!empty($login) AND !empty($mdp)) //Vérification que les champs sont bien remplis
        {
            $_SESSION['login'] = $login;
            $_SESSION['mdp'] = $mdp;
        
            $reqSession = $db -> prepare  ('  SELECT login, mdp FROM visiteur 
                                            WHERE login = ? AND mdp = ? ;');
            
            $reqSession -> execute(array($login,$mdp));

            $userExist = $reqession -> rowCount();
            var_dump ($userExist);
            
            if($userExist == 1) //Vérification qu'il existe bien cet utilisateur/mdp dans la BD
            {
                $userinfo = $reqSession->fetch(PDO::FETCH_BOTH);
                header('Location: ../view/consultation.php');
                echo 'Bravo, connexion réussi';
            }
            else 
            {   
                $erreur = 'Mauvais login ou mot de passe !';
                header('Location: ../view/homepage.php');
                echo $erreur;
            }
        }
        else
        {
            $erreur = 'Tous les champs doivent être remplis';
            header('Location: ../view/homepage.php');
            echo $erreur;
        }
    }
}


function getInformations()
{
    $db = dbConnect();
    //$_SESSION['login'] = $login;
    //$_SESSION['mdp'] = $mdp;

    $reqInformationsVisiteur = 'SELECT nom, prenom FROM visiteur WHERE login = "dandre" AND mdp = "oppg5";';
    
    $pdoReqVisiteur = $db -> query ($reqInformationsVisiteur);
    $pdoReqVisiteur -> setFetchMode(PDO::FETCH_ASSOC);
    echo $pdoReqVisiteur;
    //return $pdoReqVisiteur["nom"];
    //return $ligne["prenom"];

}


function getMois()
{
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    echo ucwords((strftime("%B %Y"))); 
}

function getDateComplete()
{
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    echo ucwords((strftime("%A %d %B %Y")));
}

