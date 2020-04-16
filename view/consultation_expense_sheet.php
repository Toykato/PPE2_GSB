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

    <h1>Consultation de fiche de frais</h1>
    <ul>
        <li><a href='?c=visitor&f=consultation_expense_sheet'>Consultation</a></li>
        <li><a href='?c=visitor&f=creation_expense_sheet'>Création de fiche</a></li>
        <li><?php getCompleteDate()?></li>
    </ul>
    
</header>

<body>

    <div id="consultationMiddle">
        <p>Bienvenue <?php echo $_SESSION['user_firstname'] . $_SESSION['user_lastname']; ?><p>
        <p>Fiche de frais de <?php getMonth();?> </p>
    </div>
</body>

</html>