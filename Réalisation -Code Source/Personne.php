<?php

    class Personne {
     
        public $prenom;
        public $nom;
        public $email;
        public $adress;
 

        public function __construct($nom,$prenom,$email,$adress) {
   
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->adress = $adress;
        }

       

        public function getNom() {
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getAdress() {
            return $this->adress;
        
        }

                                 
    }