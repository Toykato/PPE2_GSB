<?php

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

    <h1>Consultation</h1>
    <ul>
        <li><a href=''>Accueil</a></li>
        <li><a href=''>Consultation</a></li>
        <li><a href=''>Création de fiche</a></li>
        <li><?php getDateComplete()?></li>
    </ul>
    
</header>

<body>

    <div id="consultationMiddle">
        <p>Bienvenue <?php $_SESSION['nom']; ?><p>
        <p>Fiche de frais de <?php getMois();?> </p>
    </div>
</body>

</html>