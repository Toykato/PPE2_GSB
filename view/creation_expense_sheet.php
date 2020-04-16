<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de fiche de frais</title>
    <link href = "/css/style.css" rel="stylesheet" type="text/css">
</head>

<header>

    <h1>Création de fiche de frais</h1>
    <ul>
        <li><a href='?c=visitor&f=consultation_expense_sheet'>Consultation</a></li>
        <li><a href='?c=visitor&f=creation_expense_sheet'>Création de fiche</a></li>
        <li><?php getCompleteDate()?></li>
    </ul>
    
</header>

<body>

    <div class="conteneur_boutton">

        <form action='?c=visiteur&f=creationFiche' method="POST" >

            Étape : <input type="text" name="etape">
            Kilomètres : <input type="text" name="kilometre">
            Nuitée Hôtel : <input type="text" name="nuitee">
            Repas Restaurant : <input type="text" name="repas">

        <input type="submit" value="Envoyer" name='formFicheFrais'>
    </div>
</form>
</body>
</html>