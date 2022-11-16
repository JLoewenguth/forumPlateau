<?php
    namespace Model\Entities;

    use App\Entity;

    final class Utilisateur extends Entity{

        private $id;
        private $email;
        private $pseudo;
        private $MDP;
        private $role;
        private $dateInscription;

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
         * Get / set of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get / set of pseudo
         */ 
        public function getPseudo()
        {
                return $this->pseudo;
        }

        public function setPseudo($pseudo)
        {
                $this-> pseudo = $pseudo;

                return $this;
        }

        /**
         * Get / set of MDP
         */ 
        public function getMDP()
        {
                return $this->MDP;
        }

        public function setMDP($MDP)
        {
                $this->MDP = $MDP;

                return $this;
        }

        /**
         * Get / set of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }

        /**
         * Get / set of dateInscription
         */ 
        public function getDateInscription()
        {
                return $this->dateInscription;
        }

        public function setDateInscription($dateInscription)
        {
                $this->dateInscription = $dateInscription;

                return $this;
        }
    }