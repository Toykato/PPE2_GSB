<?php

    require_once "../model/model.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <link href = "/css/style.css" rel="stylesheet" type="text/css">
</head>

<header>

    <div class="navbar_container">
        <a href='?c=visitor&f=consultationExpenseSheet'><div class="navbar_element">Consultation</div></a>
        <a href='?c=visitor&f=creationExpenseSheet'><div class="navbar_element">Création de fiche</div></a>
        <div class="navbar_element"><?php getCompleteDate()?></div>
    </div>
    
</header>