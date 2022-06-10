<?php

    namespace App\Commandes\Ventilateur;

    class CommandeEteindreVentilateur implements \App\Commandes\Commande {

        public \App\Objets\Ventilateur $ventilateur;

        public function __construct(\App\Objets\Ventilateur $ventilateur) {
            $this->ventilateur = $ventilateur;
        }

        public function executer() {
            $this->ventilateur->arret();
        }

        public function annuler(){}

    }

?>