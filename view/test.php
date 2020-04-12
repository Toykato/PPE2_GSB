<?php

require_once '../model/model.php';



function connectUser()
{
    $db = dbConnect(); //On récupère le DSN, user, pwd de dbConnect dans model.php
    
    if (isset($_POST['submit'])) //On vérifie que les champs sont renseignés
    {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        if(!empty($$login) AND !empty($mdp))
        {

        }
        else
        {
            $erreur = "Tous les champs doivent être renseignés";
        }
        

        /*$reqUserConnect = 'SELECT * FROM visiteur WHERE login = ' . $login . ';';
        $resultReqUserConnect = $db->prepare($reqUserConnect);
        $resultReqUserConnect->execute();
        var_dump($resultReqUserConnect);*/
    }
}