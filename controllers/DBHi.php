<?php 
    /* Database Handler */
    $servername = "localhost";
    $username = "root";
    $password = "Toscane2000**";
    $dbname = "wsphp_projet";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>