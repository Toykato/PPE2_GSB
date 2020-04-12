<?php
    
    require_once "../model/model.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href = "../public/style.css" rel="stylesheet" type="text/css">
</head>

<header>

    <h1>Accueil</h1>

</header>

<body>

    <div class="conteneur_boutton">

        <form action="?c=index&f=connectUser" method="POST">

            Login : <input type="text" name="login">

            Mot de passe : <input type="password" name="mdp">

            <input type="submit" value="Envoyer">

        </form>
    <?php
        if(isset($erreur))
        {
            echo $erreur;
        }
    ?>
    </div>

</body>
</html>