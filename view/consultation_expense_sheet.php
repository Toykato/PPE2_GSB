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
        <a href='?c=visitor&f=consultation_expense_sheet'><div class="navbar_element">Consultation</div></a>
        <a href='?c=visitor&f=creation_expense_sheet'><div class="navbar_element">Création de fiche</div></a>
        <div class="navbar_element"><?php getCompleteDate()?></div>
    </div>
    
</header>

<body>

    <div class="body_container">
        <h1>Consultation de fiche des frais</h1>
        <div class="body_element"><p>Bienvenue <?php echo $_SESSION['user_firstname'] . $_SESSION['user_lastname']; ?><p></div>
        <div class="body_element"><p>Fiche de frais de <?php getMonth();?></p></div>
    </div>

</body>

</html>