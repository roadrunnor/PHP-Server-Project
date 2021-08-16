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

              <form id="add-company-form" class="contact-form mx-auto border border-dark rounded w-100" 
                method="post" action="../controllers/Inscription-entreprise_DB.php">
                <h6 class="bg-dark border-thick text-success text-left p-3 w-100">Add new company</h6>
                  <div class="form-horizontal">
                    <!-- first row -->
                    <div class="form-group row ml-2 pt-4">
                        <label class="control-label text-dark col-md-2" for="EntrepriseName">Entreprise Name</label>
                        <div class="col-md-10">
                            <input class="form-control" id="EntrepriseName" name="EntrepriseName" type="text" required="required">
                        </div>
                    </div>

                    <!-- second row -->
                    <div class="form-group row ml-2 py-3">
                        <label class="control-label text-dark col-md-2" for="EntrepriseNote">Entreprise Note</label>
                        <div class="col-md-10">
                            <input class="form-control" id="EntrepriseNote" name="EntrepriseNote" type="text" required="required">
                        </div>
                    </div>
                    
                    <!-- Submit New Company -->
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input name="add-entreprise-submit" type="submit" value="Add company" class="ml-2 btn btn-outline-dark">
                        </div>
                    </div>

                    <!-- Go Back to Company list -->
                    <div class="mt-5 p-3">
                      <a class="text-success" href="../views/Accueil_DB.php">Go to Entreprise List</a>
                    </div>
                </div>
                <div class="form-group col-lg-8 mx-lg-auto col-md-8 mx-md-auto 
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
                            echo "<p>You have added your company!</p>";
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