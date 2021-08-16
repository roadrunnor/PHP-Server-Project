<?php
    class Customer_External{
        private $Customer_ID;
        private $Customer_email;
        private $Customer_password;

        public function __construct($Customer_ID, $Customer_email, $Customer_password){
                $this->setCustomer_ID($Customer_ID);
                $this->setCustomer_email($Customer_email);
                $this->setCustomer_password($Customer_password);
        }

        public function getCustomer_ID(){
                return $this->Customer_ID;
        }

        public function setCustomer_ID($Customer_ID){
                $this->Customer_ID = $Customer_ID;
                return $this;
        }

        public function getCustomer_email(){
                return $this->Customer_email;
        }

        public function setCustomer_email($Customer_email){
                $this->Customer_email = $Customer_email;
                return $this;
        }

        public function getCustomer_password(){
                return $this->Customer_password;
        }

        public function setCustomer_password($Customer_password){
                $this->Customer_password = $Customer_password;
                return $this;
        }
    }
