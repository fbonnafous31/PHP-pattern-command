<?php

    namespace App\Objets;

    class Porte {

        private $piece;

        public function __construct($piece) {
            $this->piece = $piece;            
        }

        public function ouvrir() {
            echo $this->piece . " : porte ouverte";
        }

        public function fermer() {
            echo $this->piece . " : porte fermée";
        }

    }

?>