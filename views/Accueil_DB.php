<?php 
require_once("Header_DB.php");
include_once("../controllers/DBHi.php");
?>
<!-- Entreprise Listing -->
  <div class="container">

    <!-- Formulaire d'entreprise affichage automatique -->
    <div class="container wrapper-entreprise py-5">
      <div class="my-3">
        <a class="btn btn-outline-dark ml-3 my-2 my-sm-0 font-weight-bold" href="AddEntreprise_DB.php">Add new company</a>
      </div>
      <div class="mb-5">
          <form id="listing-company-form" class="contact-form border border-dark rounded bg-success" 
            method="POST" action="../views/ModifyEntreprise_DB.php">
                <h6 class="bg-dark text-success text-left px-4 py-3 w-100">Entreprises Listing</h6>
                <table class="table table-hover table-striped table-dark mx-auto w-100">
                  <tbody class="p-3">
                      <tr>
                        <td class="text-success" scope="row">Entreprise ID</td>
                        <td class="text-success" scope="row">Entreprise Name</td>
                        <td class="text-success" scope="row">Entreprise Note</td>
                        <td class="text-success" scope="row">Inscription Date</td>
                        <td class="text-success" scope="row">Modification Date</td>
                        <td class="border-top-0" scope="row">
                        <?php
                            $sql = "select * from entreprise_entreprise;";
                            $result = mysqli_query($conn, $sql);
                            /* Do we have any results? */
                            $resultcheck = mysqli_num_rows($result);
                            if ($resultcheck > 0) {
                              while($rowArray = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                  <td>
                                    <?php echo $rowArray['Entreprise_ID'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Entreprise_Name'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Entreprise_Note'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php  echo $rowArray['Entreprise_DateInscription'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Entreprise_DateModification'] . "<br />";?> 
                                  </td>
                                  <td>
                                    <a class="text-secondaray btn btn-outline-secondary btn-font-size p-1 h6" href="ModifyEntreprise_DB.php?Entreprise_ID=<?php echo $rowArray['Entreprise_ID']?>">modify</a>
                                    <a class="text-secondaray btn btn-outline-secondary btn-font-size p-1 h6" href="DetailsEntreprise_DB.php?Entreprise_ID=<?php echo $rowArray['Entreprise_ID']?>">details</a>
                                    <a class="text-secondaray btn btn-outline-secondary btn-font-size p-1 h6" href="DeleteEntreprise_DB.php?Entreprise_ID=<?php echo $rowArray['Entreprise_ID']?>">delete</a>
                                  </td>
                                </tr>
                                <?php
                              }
                            }
                        ?>
                        </th>
                      </tr>
                  </tbody>
                </table>
          </form>
      </div>
    </div>
  </div>
<?php 
require_once("Footer_DB.php");
?>