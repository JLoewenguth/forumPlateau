<?php
    namespace Model\Entities;

    use App\Entity;

    final class Sujet extends Entity{

        private $id;
        private $titre;
        private $utilisateur;
        private $datecreation;
        private $ouvert;
        private $theme;

        public function __construct($data){         
            $this->hydrate($data);        
        }
 
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

       /**
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of user
         */ 
        public function getUtilisateur()
        {
                return $this->utilisateur;
        }

        /**
         * Set the value of user
         *
         * @return  self
         */ 
        public function setUtilisateur($utilisateur)
        {
                $this->utilisateur = $utilisateur;

                return $this;
        }

        /**
         * Get the value of date création
         */ 
        public function getDatecreation()
        {
                return $this->datecreation;
        }

        /**
         * Set the value of date création
         *
         * @return  self
         */ 
        public function setDatecreation($datecreation)
        {
                $this->datecreation = $datecreation;

                return $this;
        }

        /**
         * Get the value of ouvert
         */ 
        public function getOuvert()
        {
                return $this->ouvert;
        }

        /**
         * Set the value of ouvert
         *
         * @return  self
         */ 
        public function setOuvert($ouvert)
        {
                $this->ouvert = $ouvert;

                return $this;
        }

        /**
         * Get the value of theme
         */ 
        public function getTheme()
        {
                return $this->theme;
        }

        /**
         * Set the value of theme
         *
         * @return  self
         */ 
        public function setTheme($theme)
        {
                $this->theme = $theme;

                return $this;
        }
    }
