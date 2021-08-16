<?php

if (isset($_POST["signin-submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    if (emptyInputSignIn($email, $pwd) !== false) {
        header("Location: ../Connexion.php?error=emptyInputSignIn");
        exit();
    }
    SignInCustomer($conn, $email, $pwd);
}
else {
    header("Location: ../Connexion.php");
    exit();
}
?>