<?php 

class Employee_PhoneNumber{
    private $PhoneNumber_Employee_ID;
    private $PhoneNumber_ID;
    private $PhoneNumberType_ID;
    private $PhoneNumber;
    private $PhoneNumber_ModifiedDate;

    // contructeur avec encapsulation des données pour la sécurité
    public function __construct($PhoneNumber_Employee_ID, $PhoneNumber_ID, $PhoneNumberType_ID,
        $PhoneNumber, $PhoneNumber_ModifiedDate){
            $this->setPhoneNumber_Employee_ID($PhoneNumber_Employee_ID);
            $this->setPhoneNumber_ID($PhoneNumber_ID);
            $this->setPhoneNumberType_ID($PhoneNumberType_ID);
            $this->setPhoneNumber($PhoneNumber);
            $this->setPhoneNumber_ModifiedDate($PhoneNumber_ModifiedDate);
    }

    public function afficher(){

    } 
     
    public function getPhoneNumber_Employee_ID(){
        return $this->PhoneNumber_Employee_ID;
    }

    public function setPhoneNumber_Employee_ID($PhoneNumber_Employee_ID){
        $this->PhoneNumber_Employee_ID = $PhoneNumber_Employee_ID;
        return $this;
    }

    public function getPhoneNumber_ID(){
        return $this->PhoneNumber_ID;
    }

    public function setPhoneNumber_ID($PhoneNumber_ID){
        $this->PhoneNumber_ID = $PhoneNumber_ID;
        return $this;
    }

    public function getPhoneNumberType_ID(){
        return $this->PhoneNumberType_ID;
    }

    public function setPhoneNumberType_ID($PhoneNumberType_ID){
        $this->PhoneNumberType_ID = $PhoneNumberType_ID;
        return $this;
    }

    public function getPhoneNumber(){
        return $this->PhoneNumber;
    }

    public function setPhoneNumber($PhoneNumber){
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    public function getPhoneNumber_ModifiedDate(){
        return $this->PhoneNumber_ModifiedDate;
    }

    public function setPhoneNumber_ModifiedDate($PhoneNumber_ModifiedDate){
        $this->PhoneNumber_ModifiedDate = $PhoneNumber_ModifiedDate;
        return $this;
    }
}

?>