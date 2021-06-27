<?php

    class Personne {
     
        public $prenom;
        public $nom;
        public $email;
        
 

        public function __construct($nom,$prenom,$email) {
   
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            
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