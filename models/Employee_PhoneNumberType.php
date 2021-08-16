<?php
class Employee_PhoneNumberType{
    private $PhoneNumberType_ID;
    private $PhoneNumberType;
    private $PhoneNumberType_ModifiedDate;

    // contructeur avec encapsulation des données pour la sécurité
    public function __construct($PhoneNumberType_ID, $PhoneNumberType, 
        $PhoneNumberType_ModifiedDate){
            $this->setPhoneNumberType_ID($PhoneNumberType_ID);
            $this->setPhoneNumberType($PhoneNumberType);
            $this->setPhoneNumberType_ModifiedDate($PhoneNumberType_ModifiedDate);        
    }   

    public function getPhoneNumberType_ID(){
        return $this->PhoneNumberType_ID;
    }

    public function setPhoneNumberType_ID($PhoneNumberType_ID){
        $this->PhoneNumberType_ID = $PhoneNumberType_ID;
        return $this;
    }

    public function getPhoneNumberType(){
        return $this->PhoneNumberType;
    }

    public function setPhoneNumberType($PhoneNumberType){
        $this->PhoneNumberType = $PhoneNumberType;
        return $this;
    }

    public function getPhoneNumberType_ModifiedDate(){
        return $this->PhoneNumberType_ModifiedDate;
    }

    public function setPhoneNumberType_ModifiedDate($PhoneNumberType_ModifiedDate){
        $this->PhoneNumberType_ModifiedDate = $PhoneNumberType_ModifiedDate;
        return $this;
    }
}

?>