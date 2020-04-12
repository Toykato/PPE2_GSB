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
