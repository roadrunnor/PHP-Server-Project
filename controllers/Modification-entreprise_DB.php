<?php

if (isset($_POST["modify-entreprise-submit"])) {
    $Entreprise_ID = $_POST["Entreprise_ID"];
    $EntrepriseName = $_POST["EntrepriseName"];
    $EntrepriseNote = $_POST["EntrepriseNote"];
    $DateInscription = $_POST["DateInscription"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    updateEntreprise($conn, $Entreprise_ID, $EntrepriseName, $EntrepriseNote, $DateInscription);

} else {
    header("Location: ../views/Accueil_DB.php");
    exit();
} 
?>