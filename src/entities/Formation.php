<?php
    class Formation
    {
        private $id;    
        private $nom;
        private $date;
        private $lieu;
        private $duree;

        
        //==============[ CONSTRUCTOR ]==============
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        

        //==============[GETTERS & SETTERS]==============
        public function getId(){
            return $this->id;
        }
        public function setId($id)
        {
                $this->id = $id;
        }
        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom)
        {
                $this->nom = $nom;
        }
        public function getDate(){
            return $this->date;
        }
        public function setDate($date)
        {
                $this->date = $date;
        }
        public function getLieu(){
            return $this->lieu;
        }
        public function setLieu($lieu)
        {
                $this->lieu = $lieu;
        }
        public function getDuree(){
            return $this->duree;
        }
        public function setDuree($duree)
        {
                $this->duree = $duree;
        }
        //==============!\ END GETTERS & SETTERS \!==============

    }

?>