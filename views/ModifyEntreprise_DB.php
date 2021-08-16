<?php 
require_once("Header_DB.php");
include_once("../controllers/DBHi.php");

$Entreprise_ID = $_GET['Entreprise_ID'];

$query = mysqli_query($conn, "SELECT * FROM entreprise_entreprise WHERE Entreprise_ID = $Entreprise_ID");
    while ($tab = $query->fetch_assoc()){
?>
<div class="header-intro theme-bg-primary text-fuchsia py-5">
    <div class="container">
        <div class="media-body text-center text-md-left">
            <!-- Formulaire d'entreprise affichage automatique -->
            <div class="container py-4">
                <div class="row my-3">
                    <form id="modify-entreprise-form" class="contact-form mx-auto border border-dark rounded w-100" 
                        method="post" action="../controllers/Modification-entreprise_DB.php">
                        <input type="hidden" name="Entreprise_ID" value="<?php echo $tab['Entreprise_ID']?>">
                        <h6 class="bg-dark border-thick text-success text-left mb-5 p-3 w-100">Modify an existing company</h6>
                        <div class="form-horizontal">
                            <div class="form-group row mt-4">
                                <label class="control-label text-right text-dark col-md-2" for="EntrepriseName">Entreprise Name :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="EntrepriseName" name="EntrepriseName" type="text" value="<?php echo $tab['Entreprise_Name']?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="EntrepriseNote">Entreprise Note :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="EntrepriseNote" name="EntrepriseNote" type="text" value="<?php echo $tab['Entreprise_Note']?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right text-dark col-md-2" for="DateInscription">Date Inscription :</label>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" id="DateInscription" name="DateInscription" type="text" value="<?php echo $tab['Entreprise_DateInscription']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input name="modify-entreprise-submit" type="submit" value="Save Entreprise" class="form-control text-box single-line btn btn-outline-dark">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 p-3">
                            <a class="text-success" href="../views/Accueil_DB.php">Go to Entreprise List</a>
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