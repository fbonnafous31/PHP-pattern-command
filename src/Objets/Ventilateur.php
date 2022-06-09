<?php

    namespace App\Objets;

    class Ventilateur {

        private $piece;

        public function __construct($piece) {
            $this->piece = $piece;            
        }

        public function marche() {
            echo $this->piece . " : ventilateur allumé";
        }

        public function arret() {
            echo $this->piece . " : ventilateur éteint";
        }

    }

?>