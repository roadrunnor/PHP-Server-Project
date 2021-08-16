<?php 
require_once("Header_DB.php");
include_once("../controllers/DBHi.php");
?>
<!-- Employee Listing -->
  <div class="container">

    <!-- Formulaire d'employé affichage automatique -->
    <div class="container py-5">
      <div class="my-3 ml-3">
        <a class="btn btn-outline-dark ml-0 my-2 my-sm-0 font-weight-bold" href="AddEmployee_DB.php">Add new employee</a>
      </div>
      <div class="mb-5">
          <form id="listing-employee-form" class="contact-form border border-dark rounded bg-success" 
            method="POST" action="../views/ModifyEmployee_DB.php">
                <h6 class="bg-dark text-success text-left px-4 py-3 w-100">Employee Listing</h6>
                <table class="table table-hover table-striped table-dark">
                  <tbody class="">
                      <tr>
                        <td class="text-success" scope="row">Firstname</td>
                        <td class="text-success" scope="row">Middlename</td>
                        <td class="text-success" scope="row">Lastname</td>
                        <td class="text-success" scope="row">Gender</td>
                        <td class="text-success" scope="row">EmailAddress</td>
                        <td class="text-success" scope="row">EmployeeTitle</td>
                        <td class="text-success" scope="row">Department</td>
                        <td class="text-success" scope="row">CompanyName</td>
                        <td class="text-success" scope="row">ModificationDate</td>
                        <td class="border-top-0 m-0 p-0" scope="row">
                        <?php
                            $sql = "select * from employee_employee;";
                            $result = mysqli_query($conn, $sql);
                            /* Do we have any results? */
                            $resultcheck = mysqli_num_rows($result);
                            if ($resultcheck > 0) {
                              while($rowArray = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                  <td>
                                    <?php echo $rowArray['Employee_FirstName'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_MiddleName'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_LastName'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_Gender'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_EmailAddress'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_Title'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_Department'] . " "; ?> 
                                  </td>
                                  <td>
                                    <?php 
                                      $Entreprise_ID = $rowArray['Employee_Entreprise_ID'];
                                      $query = mysqli_query($conn, "SELECT `Entreprise_Name` FROM wsphp_projet.entreprise_entreprise WHERE Entreprise_ID = $Entreprise_ID ;");
                                      while ($tab = $query->fetch_assoc()){ echo $tab['Entreprise_Name'];}
                                    ?> 
                                  </td>
                                  <td>
                                    <?php echo $rowArray['Employee_ModifiedDate'] . "<br />";?> 
                                  </td>
                                  <td>
                                    <a class="text-secondaray btn btn-outline-secondary btn-font-size p-1 h6" 
                                        href="ModifyEmployee_DB.php?Employee_ID=<?php echo $rowArray['Employee_ID']?>&Entreprise_ID=<?php echo $Entreprise_ID?>">modify</a>
                                    <a class="text-secondaray btn btn-outline-secondary btn-font-size p-1 h6" 
                                        href="DetailsEmployee_DB.php?Employee_ID=<?php echo $rowArray['Employee_ID']?>">details</a>
                                    <a class="text-secondaray btn btn-outline-secondary btn-font-size p-1 h6" 
                                        href="DeleteEmployee_DB.php?Employee_ID=<?php echo $rowArray['Employee_ID']?>">delete</a>
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