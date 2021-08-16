<?php 
    date_default_timezone_set('America/Montreal');
    $DateInscription = date("Y-m-d"); 
    $DateModification = date("Y-m-d");

function emptyInputSignUp($email, $pwd, $pwdRepeat){
    $result = true; 
    if (empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputEntreprise($EntrepriseName, $EntrepriseNote){
    $result = true; 
    if (empty($EntrepriseName) || empty($EntrepriseNote)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

/* If we have an invalid email then it will create an error message */
function invalidEmail($email){
    $result = true;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $email)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result = true;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailIdExists($conn, $email){
    $sql = "SELECT * FROM customer_external WHERE Customer_email = ?;";
    /* prepare statement with sql preventing injeciton from the user */
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../Inscription.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        /* inside here return true, DB return something for users, good login */
        /* give this function a second purpose, grabbing the date with the email */
        /* continuating with login form */
        /* also assing the data for further purposes */
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function entrepriseIdExists($conn, $EntrepriseName){
    $sql = "SELECT * FROM entreprise_entreprise WHERE Entreprise_Name = ?;";
    /* prepare statement with sql preventing injeciton from the user */
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../Inscription-entreprise_DB.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $EntrepriseName);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        /* inside here return true, DB return something for users, good login */
        /* give this function a second purpose, grabbing the date with the email */
        /* continuating with login form */
        /* also assing the data for further purposes */
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createCustomer($conn, $email, $pwd){
    try {
        $sql = "INSERT INTO Customer_external (Customer_email, Customer_pwd) VALUES (?, ?);";
        /* prepare statement with sql preventing injeciton from the user */
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Inscription.php?error=stmtFailed");
            exit();
        }

        /* Protecton against hacker to the DBase */
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../Inscription-response.php?error=none");
        exit();
    } catch (Exception $th) {
        echo $th;
        exit();
    }

}

function createEmployee($conn, $Entreprise_ID, $FirstName, $MiddleName, $LastName, $Gender, $EmailAddress, $Title, $Department){
    global $DateInscription;
    try {
        $sql = "INSERT INTO employee_employee (Employee_Entreprise_ID, Employee_FirstName, Employee_MiddleName, Employee_LastName, Employee_Gender, Employee_EmailAddress, Employee_Title, Employee_Department, Employee_ModifiedDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        /* prepare statement with sql preventing injeciton from the user */
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            /* header("Location: ../AddEntreprise_DB.php?error=stmtFailed"); */
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "issssssss", $Entreprise_ID, $FirstName, $MiddleName, $LastName, $Gender, $EmailAddress, $Title, $Department, $DateInscription);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../views/AddEmployee_DB.php?error=none");
        exit();
    } catch (Exception $th) {
        echo $th;
        exit();
    }

}

function updateEmployee($conn, $Entreprise_ID, $Employee_ID, $FirstName, $MiddleName, $LastName, $Gender, $EmailAddress, $Title, $Department){
    global $DateInscription;
    try {
        $sql = "UPDATE wsphp_projet.employee_employee SET Employee_Entreprise_ID = ?, Employee_FirstName = ?, Employee_MiddleName = ?, Employee_LastName = ?, Employee_Gender = ?, Employee_EmailAddress = ?, Employee_Title = ?, Employee_Department = ?, Employee_ModifiedDate = ? WHERE Employee_ID = ? ;";
        /* prepare statement with sql preventing injeciton from the user */
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            /* header("Location: ../AddEntreprise_DB.php?error=stmtFailed"); */
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "issssssssi", $Entreprise_ID, $FirstName, $MiddleName, $LastName, $Gender, $EmailAddress, $Title, $Department, $DateInscription, $Employee_ID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../views/Employee_DB.php?error=none");
        exit();
    } catch (Exception $th) {
        echo $th;
        exit();
    }
}

function deleteEmployee($conn, $Employee_ID){
    $sql = "DELETE FROM wsphp_projet.employee_employee WHERE Employee_ID = ? ;";

    $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            /* header("Location: ../AddEntreprise_DB.php?error=stmtFailed"); */
            exit();
        }
    mysqli_stmt_bind_param($stmt, "i", $Employee_ID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../views/Employee_DB.php?error=none");
    exit();
}

function createEnterprise($conn, $EntrepriseName, $EntrepriseNote){
    global $DateInscription;
    try {
        $sql = "INSERT INTO entreprise_entreprise (Entreprise_Name, Entreprise_Note, Entreprise_DateInscription) VALUES (?, ?, ?);";
        /* prepare statement with sql preventing injeciton from the user */
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            /* header("Location: ../AddEntreprise_DB.php?error=stmtFailed"); */
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "sss", $EntrepriseName, $EntrepriseNote, $DateInscription);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../views/AddEntreprise_DB.php?error=none");
        exit();
    } catch (Exception $th) {
        echo $th;
        exit();
    }
}

function updateEntreprise($conn, $Entreprise_ID, $EntrepriseName, $EntrepriseNote, $DateInscription){
    global $DateModification;
    try {
        $sql = "UPDATE wsphp_projet.entreprise_entreprise SET Entreprise_Name = ?, Entreprise_Note = ?, Entreprise_DateInscription = ?, Entreprise_DateModification = ? WHERE Entreprise_ID = ? ;";
        /* prepare statement with sql preventing injeciton from the user */
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            /* header("Location: ../AddEntreprise_DB.php?error=stmtFailed"); */
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ssssi", $EntrepriseName, $EntrepriseNote, $DateInscription, $DateModification, $Entreprise_ID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../views/Accueil_DB.php?error=none");
        exit();
    } catch (Exception $th) {
        echo $th;
        exit();
    }
}

function deleteEntreprise($conn, $Entreprise_ID){
    $sql = "DELETE FROM wsphp_projet.entreprise_entreprise WHERE Entreprise_ID = ? ;";

    $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            /* header("Location: ../AddEntreprise_DB.php?error=stmtFailed"); */
            exit();
        }
    mysqli_stmt_bind_param($stmt, "i", $Entreprise_ID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../views/Accueil_DB.php?error=none");
    exit();
}

function emptyInputSignIn($email, $pwd){
    $result = true; 
    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function SignInCustomer($conn, $email, $pwd){
    $emailIdExists = emailIdExists($conn, $email);
    /* Error Handler if an email return false meaming it doestn exist 
       in the database */
    if ($emailIdExists === false) {
        header("Location: ../Connexion.php?error=wrongLogin");
        exit();
    }

    /* Database password Customer_pwd */
    $pwdHashed = $emailIdExists["Customer_pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("Location: ../Connexion.php?error=wrongLogin");
        exit();
    }

    elseif ($checkPwd === true) {
        session_start();
        $_SESSION["email"] = $emailIdExists["Customer_email"];
        header("Location: ../Connexion-response.php?error=none");
        exit();
    }
}
?>