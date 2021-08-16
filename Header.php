<?php
    require_once("controllers/Functions_DB.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <title>Projet PHP - Sylvain Breton</title>
    <!-- Cette page utilise Bootstrap avec CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="top-bar theme-bg-primary-darken">
            <div class="container-fluid">
                <!-- navbar complete -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"></a>
                    <!-- navbar media-sociaux -->
                    <ul class="navbar-nav form-inline navbar-expand mr-auto mt-0 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link p-2" href="https://www.facebook.com/sylvain.breton.9">
                                <svg class="svg-inline---fa fa-facebook-in fa-w-10 fa-fw" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="facebook" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="fuchsia" d="M448,24.7v398.5c0,13.7-11.1,24.7-24.7,24.7H309.1V274.5h58.2l8.7-67.6h-67v-43.2c0-19.6,5.4-32.9,33.5-32.9h35.8V70.3c-6.2-0.8-27.4-2.7-52.2-2.7c-51.6,0-87,31.5-87,89.4v49.9h-58.4v67.6h58.4V448H24.7C11.1,448,0,436.9,0,423.3V24.7
    	                            C0,11.1,11.1,0,24.7,0h398.5C436.9,0,448,11.1,448,24.7z" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" href="https://twitter.com/SylvainBreton1">
                                <svg class="svg-inline---fa fa-twitter fa-w-16 fa-fw" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="twitter" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="fuchsia"
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" href="https://github.com/RoadRunnor">
                                <svg class="svg-inline---fa fa-github-alt fa-w-15 fa-fw" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="github-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512" data-fa-i2svg="">
                                    <path fill="fuchsia"
                                        d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" href="https://www.linkedin.com/in/roadrunnor/">
                                <svg class="svg-inline---fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="linkedin" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="fuchsia"
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                    </ul>
                    <!-- hamburger menu -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- navbar menu-items and searchbar -->
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <!-- navbar menu-items -->
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-2">
                            <li class="nav-item active">
                                <a class="nav-link text-success" href="Accueil.php">home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="#">project</a>
                            </li>
                            <?php
                                if (isset($_SESSION["email"])) {
                                    echo '<li class="nav-item"><a class="nav-link text-success" 
                                        href="controllers/Logout.php">Disconnect</a></li>';  // Logout
                                }
                                else {
                                    echo '<li class="nav-item"><a class="nav-link text-success" 
                                        href="Connexion.php">Connexion</a></li>';   // login
                                }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="Inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="Presentation.php">resume</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="Contact.php">contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-success" href="#" id="dropdownId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">pages</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item text-success" href="#">web production</a>
                                    <a class="dropdown-item text-success" href="#">contemporary art production</a>
                                </div>
                            </li>
                        </ul>
                        <!-- searchbar -->
                        <form class="form-inline ml-5 mr-3 my-2 mt-lg-3">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>