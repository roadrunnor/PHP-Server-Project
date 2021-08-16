<?php

if (isset($_POST["modify-employee-submit"])) {
    $Employee_ID = $_POST["Employee_ID"];
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

    updateEmployee($conn, $Entreprise_ID, $Employee_ID, $FirstName, $MiddleName, $LastName, $Gender, $EmailAddress, $Title, $Department);

} else {
    header("Location: ../views/Employee_DB.php");
    exit();
} 
?>