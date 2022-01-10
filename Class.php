<?php
    
        
//    Classe Employé 
    class Employé {
        public $nom;
        public $prenom;
        public $DateNaissance;
        public $sexe;
        private $NumeroSecu;
        private $RIB;
        private $adresse;
    
    
// Fonction constructeur

        public function __construct($nom, $prenom, $DateNaissance, $sexe,
        $NumeroSecu, $RIB,$adresse){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->DateNaissance = $DateNaissance;
            $this->sexe = $sexe;
            $this->NumeroSecu = $NumeroSecu;
            $this->RIB = $RIB;
            $this->adresse = $adresse;
        }

// Getter et Setter des données privées

        public function getNumeroSecu() {
            return $this->NumeroSecu;
        }
        private function setNumeroSecu($value) {
            return $this->NumeroSecu = $value;
        }

        public function getRIB() {
            return $this->RIB;
        }
        private function setRIB($value) {
            return $this->RIB = $value;
        }

        public function getadresse() {
            return $this->adresse;
        }
        private function setadresse($value) {
            return $this->adresse = $value;
        }

// Fonction Afficher Employé

public function afficher_employe(){
    echo "Les données de l'employés sont : \n -";
    echo $this->nom."\n -";
    echo $this->prenom."\n -";
    echo $this->DateNaissance."\n -";
    echo $this->sexe."\n -";
    echo $this->NumeroSecu;
}
    }

?>