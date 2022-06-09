<?php

    namespace App\Objets;

    class Lampe {

        private $piece;

        public function __construct($piece) {
            $this->piece = $piece;            
        }

        public function marche() {
            echo $this->piece . " : lampe allumée";
        }

        public function arret() {
            echo $this->piece . " : lampe éteinte";
        }

    }

?>