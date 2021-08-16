<?php

if (isset($_POST["add-entreprise-submit"])) {
    $EntrepriseName = $_POST["EntrepriseName"];
    $EntrepriseNote = $_POST["EntrepriseNote"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    /* SignUp form source : https://www.youtube.com/watch?v=gCo6JqGMi30 (Dani Krossing) */
    if (emptyInputEntreprise($EntrepriseName, $EntrepriseNote) !== false) {
        header("Location: ../Inscription-entreprise_DB.php?error=emptyInputEntreprise");
        exit();
    }

    if (entrepriseIdExists($conn, $EntrepriseName) !== false) {
        header("Location: ../Inscription-entreprise_DB.php?error=entrepriseIdTaken");
        exit();
    }
    createEnterprise($conn, $EntrepriseName, $EntrepriseNote);

} else {
    /* echo "It's don't works"; */
    header("Location: ../Inscription-entreprise_DB.php");
    exit();
} 
?>