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

function connectUser()
{
    $db = dbConnect(); //On récupère le DSN, user, pwd de dbConnect dans model.php
    
    if (isset($_POST['submit'])) //On vérifie que les champs sont renseignés
    {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        if(!empty($login) AND !empty($mdp)) //Si les champs sont renseignés
        {
            $req_user = $db->prepare('SELECT * FROM visiteur WHERE login = ? AND mdp = ?;');
            $req_user->execute(array($login, $mdp));
            $user_exist = $req_user->rowCount();

            if($user_exist == 1) //Si le rowCount renvoie 1 alors l'utilisateur existe dans la DB
            {
                $error = "Connecté !";
                $user_connected = $req_user->fetch(PDO::FETCH_ASSOC);
                $_SESSION['user_firstname'] = $user_connected['prenom'];
                $_SESSION['user_lastname'] = $user_connected['nom'];
                unset($_SESSION['connection_error']);
                return true;
            }
            else
            {
                $error = "Mauvais login ou mot de passe";
                $_SESSION['connection_error'] = $error;
                return false;
            }
        }
        else
        {
            $error = "Tous les champs doivent être renseignés";
            $_SESSION['connection_error'] = $error;
            return false;
        }
    }

}

function disconnectUser()
{
    unset($_SESSION['user_firstname']);
    unset($_SESSION['user_lastname']);
}
