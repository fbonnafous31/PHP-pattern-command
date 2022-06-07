<?php

    namespace App\Commandes\PorteGarage;

    class CommandeOuvrirPorteGarage implements \App\Commandes\Commande {

        public \App\Objets\PorteGarage $porteGarage;

        public function __construct(\App\Objets\PorteGarage $porteGarage) {
            $this->porteGarage = $porteGarage;
        }

        public function executer() {
            $this->porteGarage->ouvrir();
        }

    }

?>