<?php

if (isset($_POST["add-employee-submit"])) {
    $Entreprise_ID = $_POST["EntrepriseID"];
    $FirstName = $_POST["FirstName"];
    $MiddleName = $_POST["MiddleName"];
    $LastName = $_POST["LastName"];
    $Gender = $_POST["Gender"];
    $EmailAddress = $_POST["EmailAddress"];
    $Title = $_POST["Title"];
    $Department = $_POST["Department"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    createEmployee($conn, $Entreprise_ID, $FirstName, $MiddleName, $LastName, $Gender, $EmailAddress, $Title, $Department);

} else {
    header("Location: ../controllers/Inscription-employee_DB.php");
    exit();
} 
?>