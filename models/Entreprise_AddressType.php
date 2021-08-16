<?php 

    class Entreprise_AddressType {
        private $AddressType_ID;
        private $AddressType;
        private $AddressType_ModifiedDate;

        // contructeur avec encapsulation des données pour la sécurité
        public function __construct($AddressType_ID, $AddressType, $AddressType_ModifiedDate){
            $this->setAddressType_ID($AddressType_ID);
            $this->setAddressType($AddressType);
            $this->setAddressType_ModifiedDate($AddressType_ModifiedDate);
        }

        public function afficher(){

        } 

        public function getAddressType_ID(){
                return $this->AddressType_ID;
        }

        public function setAddressType_ID($AddressType_ID){
                $this->AddressType_ID = $AddressType_ID;
                return $this;
        }

        public function getAddressType(){
                return $this->AddressType;
        }

        public function setAddressType($AddressType){
                $this->AddressType = $AddressType;
                return $this;
        }

        public function getAddressType_ModifiedDate(){
                return $this->AddressType_ModifiedDate;
        }

        public function setAddressType_ModifiedDate($AddressType_ModifiedDate){
                $this->AddressType_ModifiedDate = $AddressType_ModifiedDate;
                return $this;
        }
    }


?>