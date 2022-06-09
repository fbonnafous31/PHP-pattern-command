<?php

    namespace App\Objets;

    class Stereo {

        private $piece;

        public function __construct($piece) {
            $this->piece = $piece;            
        }

        public function marche() {
            echo $this->piece . " : stéréo allumée";
        }

        public function arret() {
            echo $this->piece . " : stéréo éteinte";
        }

        public function setCD(){

        }

        public function setVolume($volume) {
            $this->volume = $volume;
            echo " - volume à " . $volume;
        }

        public function getVolume() {
            return $this->volume;
        }

    }

?>