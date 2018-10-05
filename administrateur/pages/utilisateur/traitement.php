<?php

if (ISSET($_POST['submit'])) {
    $nom = $_POST['nom'];
    $fonction = $_POST['cbofonction'];
    $agence = $_POST['agence'];
    echo 'Nom : '. $nom .' Fonction: '. $fonction.' Agence : '. $agence;
    //header("Location: ./userList.php");
}