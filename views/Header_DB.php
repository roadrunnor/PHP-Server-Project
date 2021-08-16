<?php 
include_once("../controllers/DBH.php");
require_once("../controllers/Functions_DB.php");
session_start();
if(!isset($_SESSION["email"]) || $_SESSION["email"] != true) {
    header("Location: ../Connexion.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <title>Projet PHP Database</title>
    <!-- Cette page utilise Bootstrap avec CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Projet.js"></script>
    <link type="text/css" rel="stylesheet" href="Projet_DB.css" />
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="top-bar theme-bg-primary-darken">
            <div class="container-fluid">
                <!-- navbar complete -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <!-- Brand (SVG) -->
                    <a class="navbar-brand" href="../Accueil.php">
                        <img class="profile-xsmall d-inline-block mx-auto rounded-circle" 
                        src="images/don-brown-square.svg" alt="">
                    </a>
                    <div class="navbar navbar-expand-lg navbar-dark bg-dark text-light
                         mr-auto mx-lg-auto">
                        <?php 
                            $object = new DBH;
                            $object->connect();
                        ?>
                    </div>
                    <!-- hamburger menu -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" 
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- navbar menu-items and searchbar -->
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <!-- navbar menu-items -->
                        <ul class="navbar-nav mx-auto px-lg-4 mt-2 mt-lg-2">

                            <li class="nav-item active">
                                <a class="nav-link text-success" href="../views/Accueil_DB.php">enterprises 
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="../views/AddressTypes_DB.php">address types</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="../views/Adressses_DB.php">adressses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="../views/Employee_DB.php">employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="../views/PhoneType_DB.php">phone types</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="../views/Phone_DB.php">phone</a>
                            </li>
                            <?php
                                if (isset($_SESSION["email"])) {
                                    echo '<li class="nav-item"><a class="nav-link text-success" 
                                        href="../controllers/Logout.php">Disconnect</a></li>';
                                }
                            ?>
                        </ul>
                        <!-- searchbar -->
                        <form class="form-inline ml-lg-5 my-2 mt-lg-2">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>