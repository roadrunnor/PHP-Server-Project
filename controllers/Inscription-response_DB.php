<?php

if (isset($_POST["signup-submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    /* SignUp form source : https://www.youtube.com/watch?v=gCo6JqGMi30 (Dani Krossing) */
    if (emptyInputSignUp($email, $pwd, $pwdRepeat) !== false) {
        header("Location: ../Inscription.php?error=emptyInputSignUp");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("Location: ../Inscription.php?error=invalidEmail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("Location: ../Inscription.php?error=pwdDontMatch");
        exit();
    }

    if (emailIdExists($conn, $email) !== false) {
        header("Location: ../Inscription.php?error=emailIdTaken");
        exit();
    }
    createCustomer($conn, $email, $pwd);

} else {
    /* echo "It's don't works"; */
    header("Location: ../Inscription.php");
    exit();
} 
?>