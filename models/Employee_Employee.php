<?php 

class Employee_Employee {
    private $Employee_ID;
    private $Entreprise_ID;
    private $Employee_FirstName;
    private $Employee_MiddleName;
    private $Employee_LastName;
    private $Employee_Gender;
    private $Employee_EmailAddress;
    private $Employee_Title;
    private $Employee_Department;
    private $Employee_ModifiedDate;

    // Constructeur 
    public function __construct($Employee_ID, $Entreprise_ID, $Employee_FirstName,
        $Employee_MiddleName, $Employee_LastName, $Employee_Gender, $Employee_EmailAddress, $Employee_Title, $Employee_Department, $Employee_ModifiedDate){
            $this->setEmployee_ID($Employee_ID);
            $this->setEntreprise_ID($Entreprise_ID);
            $this->setEmployee_FirstName($Employee_FirstName);
            $this->setEmployee_MiddleName($Employee_MiddleName);
            $this->setEmployee_LastName($Employee_LastName);
            $this->setEmployee_Gender($Employee_Gender);
            $this->setEmployee_EmailAddress($Employee_EmailAddress);
            $this->setEmployee_Title($Employee_Title);
            $this->setEmployee_Department($Employee_Department);
            $this->setEmployee_ModifiedDate($Employee_ModifiedDate);
    }

    // comportement ici d'afficher les éléments de la classe
    public function afficher(){
        var_dump($this->Employee_ID, $this->Entreprise_ID, $this->Employee_FirstName, 
        $this->Employee_MiddleName, $this->Employee_LastName, $this->Employee_Gender, 
        $this->Employee_EmailAddress, $this->Employee_Title, $this->Employee_Department, 
        $this->Employee_ModifiedDate);
    }

    // Tous les Getters et les setters
    public function getEmployee_ID(){
        return $this->Employee_ID;
    }

    public function setEmployee_ID($Employee_ID){
        $this->Employee_ID = $Employee_ID;
        return $this;
    }

    public function getEntreprise_ID(){
        return $this->Entreprise_ID;
    }

    public function setEntreprise_ID($Entreprise_ID){
        $this->Entreprise_ID = $Entreprise_ID;
        return $this;
    }

    public function getEmployee_FirstName(){
        return $this->Employee_FirstName;
    }

    public function setEmployee_FirstName($Employee_FirstName){
        $this->Employee_FirstName = $Employee_FirstName;
        return $this;
    }

    public function getEmployee_MiddleName(){
        return $this->Employee_MiddleName;
    }

    public function setEmployee_MiddleName($Employee_MiddleName){
        $this->Employee_MiddleName = $Employee_MiddleName;
        return $this;
    }

    public function getEmployee_LastName(){
        return $this->Employee_LastName;
    }

    public function setEmployee_LastName($Employee_LastName){
        $this->Employee_LastName = $Employee_LastName;
        return $this;
    }

    public function getEmployee_Gender(){
        return $this->Employee_Gender;
    }

    public function setEmployee_Gender($Employee_Gender){
        $this->Employee_Gender = $Employee_Gender;
        return $this;
    }

    public function getEmployee_EmailAddress(){
        return $this->Employee_EmailAddress;
    }

    public function setEmployee_EmailAddress($Employee_EmailAddress){
        $this->Employee_EmailAddress = $Employee_EmailAddress;
        return $this;
    }

    public function getEmployee_Title(){
        return $this->Employee_Title;
    }

    public function setEmployee_Title($Employee_Title){
        $this->Employee_Title = $Employee_Title;
        return $this;
    }

    public function getEmployee_Department(){
        return $this->Employee_Department;
    }

    public function setEmployee_Department($Employee_Department){
        $this->Employee_Department = $Employee_Department;
        return $this;
    }

    public function getEmployee_ModifiedDate(){
        return $this->Employee_ModifiedDate;
    }

    public function setEmployee_ModifiedDate($Employee_ModifiedDate){
        $this->Employee_ModifiedDate = $Employee_ModifiedDate;
        return $this;
    }
}

$employe = new Employee_Employee(1, "beton", "Sylvain", "Lafontaine", "Breton", "Masculin", "sylvain.breton@gmail.com", "web developer", "backend", "2000-03-12");
$employe->afficher();

?>