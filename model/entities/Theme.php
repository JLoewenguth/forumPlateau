<?php
    namespace Model\Entities;

    use App\Entity;

    final class Theme extends Entity{

        private $id;
        private $nomTheme;
       

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
         * Get / set of nom theme
         */ 
        public function getNomTheme()
        {
                return $this->nomTheme;
        }

        public function setNomTheme($nomTheme)
        {
                $this->nomTheme = $nomTheme;

                return $this;
        }

        
    }