<?php

if (isset($_POST["delete-entreprise-submit"])) {
    $Entreprise_ID = $_POST["Entreprise_ID"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    deleteEntreprise($conn, $Entreprise_ID);

} else {
    header("Location: ../views/Accueil_DB.php");
    exit();
} 
?>