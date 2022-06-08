<?php

    namespace App\Objets;

    class Stereo {

        public function marche() {
            echo "Stereo allumée";
        }

        public function arret() {
            echo "Stereo éteinte";
        }

        public function setCD(){

        }

        public function setVolume($volume) {
            $this->volume = $volume;
        }

    }

?>