<?php

//Connexion à la base de données
function dbConnect()
{
    $dsn = "mysql:host=127.0.0.1;dbname=gsbfrais";
    $user = "root";
    $pwd = "";

    try
    {
        $db = new PDO($dsn, $user, $pwd);
        return $db;
        echo 'Connexion db réussie';
    }

    catch (Exception $e)
    {
        die('Connexion échouée ! : '.$e->getMessage());
    }
} 


function getInformations()
{
    $db = dbConnect();

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

function connectUser()
{
    $db = dbConnect(); //On récupère le DSN, user, pwd de dbConnect dans model.php
    
    if (isset($_POST['submit'])) //On vérifie que les champs sont renseignés
    {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        if(!empty($login) AND !empty($mdp))
        {
            $requser = $db->prepare('SELECT * FROM visiteur WHERE login = ? AND mdp = ?;');
            $requser->execute(array($login, $mdp));
            $userexist = $requser->rowCount();

            if($userexist == 1)
            {
                $erreur = "Connecté !";
                $userConnected = $requser->fetch(PDO::FETCH_ASSOC);
                $_SESSION['user_firstname'] = $userConnected['prenom'];
                $_SESSION['user_lastname'] = $userConnected['nom'];
                unset($_SESSION['connection_error']);
                return true;
            }
            else
            {
                $erreur = "Mauvais login ou mot de passe";
                $_SESSION['connection_error'] = $erreur;
                return false;
            }
        }
        else
        {
            $erreur = "Tous les champs doivent être renseignés";
            $_SESSION['connection_error'] = $erreur;
            return false;
        }
    }

}

function disconnectUser()
{
    unset($_SESSION['user_firstname']);
    unset($_SESSION['user_lastname']);
}