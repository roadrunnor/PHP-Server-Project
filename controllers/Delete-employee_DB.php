<?php

if (isset($_POST["delete-employee-submit"])) {
    $Employee_ID = $_POST["Employee_ID"];

    require_once("DBHi.php");
    require_once("Functions_DB.php");

    deleteEmployee($conn, $Employee_ID);

} else {
    header("Location: ../views/Employee_DB.php");
    exit();
} 
?>