<?php
    namespace Model\Entities;

    use App\Entity;

    final class Message extends Entity{

        private $id;
        private $texte;
        private $dateEcriture;
        private $utilisateur;
        private $sujet;

        public function __construct($data){
            $this->hydrate($data);
        }

        /**
         * Get / set of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get / set of texte
         */ 
        public function getTexte()
        {
                return $this->texte;
        }

        public function setTexte($texte)
        {
                $this->texte = $texte;

                return $this;
        }

        /**
         * Get / set of date écriture
         */ 
        public function getDateEcriture()
        {
                return $this->dateEcriture;
        }

        public function setDateEcriture($dateEcriture)
        {
                $this->dateEcriture = $dateEcriture;

                return $this;
        }

        /**
         * Get / set of utilisateur
         */ 
        public function getUtilisateur()
        {
                return $this->utilisateur;
        }

        public function setUtilisateur($utilisateur)
        {
                $this->utilisateur = $utilisateur;

                return $this;
        }

        /**
         * Get / set of sujet
         */ 
        public function getSujet()
        {
                return $this->sujet;
        }

        public function setSujet($sujet)
        {
                $this->sujet = $sujet;

                return $this;
        }
    }