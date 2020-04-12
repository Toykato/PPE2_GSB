<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de fiche de frais</title>
    <link href = "../public/style.css" rel="stylesheet" type="text/css">
</head>
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