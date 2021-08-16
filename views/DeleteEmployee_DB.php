<?php 
require_once("Header_DB.php");
include_once("../controllers/DBHi.php");

$Employee_ID = $_GET['Employee_ID'];

$query = mysqli_query($conn, "SELECT * FROM employee_employee WHERE Employee_ID = $Employee_ID");
    while ($tab = $query->fetch_assoc()){
?>
<div class="header-intro theme-bg-primary text-fuchsia py-5">
    <div class="container">
        <div class="media-body text-center text-md-left">
            <!-- Formulaire d'entreprise affichage automatique -->
            <div class="container py-4">
                <div class="row my-3">
                    <form id="delete-employee-form" class="contact-form mx-auto border border-dark rounded w-100" 
                        method="post" action="../controllers/Delete-employee_DB.php">
                        <input type="hidden" name="Employee_ID" value="<?php echo $tab['Employee_ID']?>">
                        <h6 class="bg-dark border-thick text-success text-left mb-5 p-3 w-100">Delete an existing employee</h6>
                        <div class="form-horizontal">
                            <div class="form-group row mt-4">
                                <label class="control-label text-right text-dark col-md-2" for="FirstName">First Name :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="FirstName" name="FirstName" type="text" value="<?php echo $tab['Employee_FirstName']?>" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="MiddleName">Middle Name :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="MiddleName" name="MiddleName" type="text" value="<?php echo $tab['Employee_MiddleName']?>"  disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="LastName">Last Name :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="LastName" name="LastName" type="text" value="<?php echo $tab['Employee_LastName']?>"  disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="Gender">Gender :</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="Gender" name="Gender"  disabled="disabled">
                                        <?php 
                                            if($tab['Employee_Gender'] == "Male"){
                                                echo "<option selected='selected' value='Male'>Male</option>";
                                                echo "<option value='Female'>Female</option>";
                                            }else {
                                                echo "<option selected='selected' value='Female'>Female</option>";
                                                echo "<option value='Male'>Male</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="EmailAddress">Email Address :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="EmailAddress" name="EmailAddress" type="text" value="<?php echo $tab['Employee_EmailAddress']?>" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="Title">Title :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="Titre" name="Title" type="text" value="<?php echo $tab['Employee_Title']?>"  disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="Department">Department :</label>
                                <div class="col-md-10">
                                  <input class="form-control text-box single-line" id="Department" name="Department" type="text" value="<?php echo $tab['Employee_Department']?>"  disabled="disabled">
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="EntrepriseID">Entreprise Name :</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="EntrepriseID" name="EntrepriseID"  disabled="disabled">
                                       <?php
                                        $query = mysqli_query($conn,"SELECT Entreprise_ID, Entreprise_Name FROM wsphp_projet.entreprise_entreprise;");
                                            while($tab = $query->fetch_assoc()){
                                                echo "<option value=", $tab["Entreprise_ID"], '>', $tab["Entreprise_Name"], "</option>";
                                            }
                                       ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input name="delete-employee-submit" type="submit" value="Delete Employee" class="form-control text-box single-line btn btn-outline-dark">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 p-3">
                            <a class="text-success" href="../views/Employee_DB.php">Go to Employees List</a>
                        </div>
                        <div class="form-group row col-lg-8 mx-lg-auto col-md-8 mx-md-auto 
                                text-center">
                            <?php 
                                if (isset($_GET["error"])) {
                                    if ($_GET["error"] == "emptyInputSignUp") {
                                        echo "<p>Fill in all the Field!</p>";
                                    }
                                    else if ($_GET["error"] == "entrepriseIdTaken") {
                                        echo "<p>Email already taken!</p>";
                                    }
                                    else if ($_GET["error"] == "stmtFailed") {
                                        echo "<p>Something went wrong, try again</p>";
                                    }
                                    else if ($_GET["error"] == "none") {
                                        echo "<p>You have added your employee!</p>";
                                    }
                                }
                            ?>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
}
require_once("Footer_DB.php");
?>