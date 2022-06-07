<?php

    namespace App\Commandes\PorteGarage;

    class CommandeFermerPorteGarage implements \App\Commandes\Commande {

        public \App\Objets\PorteGarage $porteGarage;

        public function __construct(\App\Objets\PorteGarage $porteGarage) {
            $this->porteGarage = $porteGarage;
        }

        public function executer() {
            $this->porteGarage->fermer();
        }

    }

?>