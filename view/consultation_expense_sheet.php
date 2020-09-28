<?php

require_once "../view/header.php";

?>

<body>

    <div class="body_container">
        <h1>Consultation de fiche des frais</h1>
        <div class="body_element"><p>Bienvenue <?php echo $_SESSION['user_firstname'] . $_SESSION['user_lastname']; ?><p></div>
        <div class="body_element"><p>Fiche de frais de <?php getMonth() . getCompleteDate();?></p></div>
    </div>

</body>

<?php 

require_once "../view/footer.php";

?>

</html>