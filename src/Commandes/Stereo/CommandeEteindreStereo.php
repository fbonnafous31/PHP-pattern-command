<?php

    namespace App\Commandes\Stereo;

    class CommandeEteindreStereo implements \App\Commandes\Commande {

        public \App\Objets\Stereo $stereo;

        public function __construct(\App\Objets\Stereo $stereo) {
            $this->stereo = $stereo;
        }

        public function executer() {
            $this->stereo->arret();
        }

        public function annuler(){}

    }

?>