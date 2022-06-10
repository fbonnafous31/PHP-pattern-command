<?php

    namespace App\Commandes\Stereo;

    class CommandeAllumerStereoAvecCD implements \App\Commandes\Commande {

        public \App\Objets\Stereo $stereo;

        public function __construct(\App\Objets\Stereo $stereo) {
            $this->stereo = $stereo;
        }

        public function executer() {
            $this->stereo->marche();
            $this->stereo->setCD();
            $this->stereo->setVolume(11);
        }

        public function annuler(){}

    }

?>