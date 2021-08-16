<?php 
require_once("Header_DB.php");
include_once("../controllers/DBHi.php");
?>
<div class="header-intro theme-bg-primary text-fuchsia py-5">
    <div class="container">
        <div class="media-body text-center text-md-left">
            <!-- Formulaire d'entreprise affichage automatique -->
            <div class="container py-4">
                <div class="row my-3">
                    <form id="add-employee-form" class="contact-form mx-auto border border-dark rounded w-100" 
                        method="post" action="../controllers/Inscription-employee_DB.php">
                        <h6 class="bg-dark border-thick text-success text-left mb-5 p-3 w-100">Add new employee</h6>
                        <div class="form-horizontal">
                            <div class="form-group row mt-4">
                                <label class="control-label text-right text-dark col-md-2" for="FirstName">FirstName :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="FirstName" name="FirstName" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="MiddleName">MiddleName :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="MiddleName" name="MiddleName" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="LastName">LastName :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="LastName" name="LastName" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="Gender">Gender :</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="Gender" name="Gender">
                                        <option value="none">Choose...</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="EmailAddress">EmailAddress :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="EmailAddress" name="EmailAddress" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="Title">Title :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="Titre" name="Title" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="Department">Department :</label>
                                <div class="col-md-10">
                                  <input class="form-control text-box single-line" id="Department" name="Department" type="text">
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="EntrepriseID">EntrepriseID :</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="EntrepriseID" name="EntrepriseID">
                                       <?php
                                        $query = mysqli_query($conn,"SELECT Entreprise_ID, Entreprise_Name FROM wsphp_projet.entreprise_entreprise;");
                                            while($tab = $query->fetch_assoc()){
                                                echo "<option value=", $tab["Entreprise_ID"], '>', $tab["Entreprise_Name"], "</option>";
                                            }
                                       ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-md-offset-2 col-md-10">
                                    <input name="add-employee-submit" type="submit" value="Add new Employee" class="form-control text-box single-line btn btn-outline-dark">
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
require_once("Footer_DB.php");
?>