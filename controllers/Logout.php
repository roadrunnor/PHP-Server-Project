<?php
    session_start();
    session_reset();
    session_destroy();
    header("location: ../Connexion.php?userLoggedOut");
    exit();
?>