<?php

    require_once "../model/model.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href = "/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>

        <h1>Accueil</h1>

    </header>
    <div class="conteneur_boutton">

        <form action="?c=index&f=connection" method="POST">

            Login : <input type="text" name="login">

            Mot de passe : <input type="password" name="password">

            <input type="submit" value="Envoyer" name="submit">

        </form>
    <?php
        echo $_SESSION['connection_error'] ?? null;
    ?>
    </div>

</body>
</html>