<?php 

class Entreprise_Entreprise{
    private $Entreprise_ID;
    private $Entreprise_Name;
    private $Entreprise_Note;
    private $Entreprise_DateInscription;
    private $Entreprise_DateModification;

    // contructeur avec encapsulation des données pour la sécurité
    public function __construct($Entreprise_ID, $Entreprise_Name, $Entreprise_Note, 
        $Entreprise_DateInscription, $Entreprise_DateModification){
            $this->setEntreprise_ID($Entreprise_ID);
            $this->setEntreprise_Name($Entreprise_Name);
            $this->setEntreprise_Note($Entreprise_Note);
            $this->setEntreprise_DateInscription($Entreprise_DateInscription);
            $this->setEntreprise_DateModification($Entreprise_DateModification);        
    }

    public function afficher(){
        
    } 

    public function getEntreprise_ID(){
        return $this->Entreprise_ID;
    }

    public function setEntreprise_ID($Entreprise_ID){
        $this->Entreprise_ID = $Entreprise_ID;
        return $this;
    }

    public function getEntreprise_Name(){
        return $this->Entreprise_Name;
    }

    public function setEntreprise_Name($Entreprise_Name){
        $this->Entreprise_Name = $Entreprise_Name;
        return $this;
    }

    public function getEntreprise_Note(){
        return $this->Entreprise_Note;
    }

    public function setEntreprise_Note($Entreprise_Note){
        $this->Entreprise_Note = $Entreprise_Note;
        return $this;
    }

    public function getEntreprise_DateInscription(){
        return $this->Entreprise_DateInscription;
    }

    public function setEntreprise_DateInscription($Entreprise_DateInscription){
        $this->Entreprise_DateInscription = $Entreprise_DateInscription;
        return $this;
    }

    public function getEntreprise_DateModification(){
        return $this->Entreprise_DateModification;
    }

    public function setEntreprise_DateModification($Entreprise_DateModification){
        $this->Entreprise_DateModification = $Entreprise_DateModification;
        return $this;
    }
}


?>