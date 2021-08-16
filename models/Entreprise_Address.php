<?php 

class Entreprise_Address{
    private $Address_ID;
    private $Address_Entreprise_ID;
    private $AddressType_ID;
    private $Address_Line1;
    private $Address_Line2;
    private $Address_City;
    private $Address_Province;
    private $Address_Country;
    private $Address_PostalCode;
    private $Address_Web;
    private $Address_ModifiedDate;

    // contructeur avec encapsulation des données pour la sécurité
    public function __construct($Address_ID, $Address_Entreprise_ID, $AddressType_ID, 
        $Address_Line1, $Address_Line2, $Address_City, $Address_Province, $Address_Country,
        $Address_PostalCode, $Address_Web, $Address_ModifiedDate){
            $this->setAddress_ID($Address_ID);
            $this->setAddress_Entreprise_ID($Address_Entreprise_ID);
            $this->setAddressType_ID($AddressType_ID);
            $this->setAddress_Line1($Address_Line1);
            $this->setAddress_Line2($Address_Line2);
            $this->setAddress_City($Address_City);
            $this->setAddress_Province($Address_Province);
            $this->setAddress_Country($Address_Country);
            $this->setAddress_PostalCode($Address_PostalCode);
            $this->setAddress_Web($Address_Web);
            $this->setAddress_ModifiedDate($Address_ModifiedDate);        
    }

    public function afficher(){

    }

    public function getAddress_ID(){
        return $this->Address_ID;
    }

    public function setAddress_ID($Address_ID){
        $this->Address_ID = $Address_ID;
        return $this;
    }

    public function getAddress_Entreprise_ID(){
        return $this->Address_Entreprise_ID;
    }

    public function setAddress_Entreprise_ID($Address_Entreprise_ID){
        $this->Address_Entreprise_ID = $Address_Entreprise_ID;
        return $this;
    }

    public function getAddressType_ID(){
        return $this->AddressType_ID;
    }

    public function setAddressType_ID($AddressType_ID){
        $this->AddressType_ID = $AddressType_ID;
        return $this;
    }

    public function getAddress_Line1(){
        return $this->Address_Line1;
    }

    public function setAddress_Line1($Address_Line1){
        $this->Address_Line1 = $Address_Line1;
        return $this;
    }

    public function getAddress_Line2(){
        return $this->Address_Line2;
    }

    public function setAddress_Line2($Address_Line2){
        $this->Address_Line2 = $Address_Line2;
        return $this;
    }

    public function getAddress_City(){
        return $this->Address_City;
    }

    public function setAddress_City($Address_City){
        $this->Address_City = $Address_City;
        return $this;
    }

    public function getAddress_Province(){
        return $this->Address_Province;
    }

    public function setAddress_Province($Address_Province){
        $this->Address_Province = $Address_Province;
        return $this;
    }

    public function getAddress_Country(){
        return $this->Address_Country;
    }

    public function setAddress_Country($Address_Country){
        $this->Address_Country = $Address_Country;
        return $this;
    }

    public function getAddress_PostalCode(){
        return $this->Address_PostalCode;
    }

    public function setAddress_PostalCode($Address_PostalCode){
        $this->Address_PostalCode = $Address_PostalCode;
        return $this;
    }
 
    public function getAddress_Web(){
        return $this->Address_Web;
    }

    public function setAddress_Web($Address_Web){
        $this->Address_Web = $Address_Web;
        return $this;
    }

    public function getAddress_ModifiedDate(){
        return $this->Address_ModifiedDate;
    }

    public function setAddress_ModifiedDate($Address_ModifiedDate){
        $this->Address_ModifiedDate = $Address_ModifiedDate;
        return $this;
    }
}

    
?>