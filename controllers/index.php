<?php
session_start();
require_once '../model/model.php';
require_once '../public/index.php';

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
                //header("Location: ?c=visiteur&f=welcome");
            }
            else
            {
                $erreur = "Mauvais login ou mot de passe";
                //index();
            }
        }
        else
        {
            $erreur = "Tous les champs doivent être renseignés";
            //index();
        }
    }

}

function index()
{
    require_once '../public/index.php';
}

function disconnectUser()
{

}
