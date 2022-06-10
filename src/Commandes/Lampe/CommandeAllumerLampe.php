<?php

    namespace App\Commandes\Lampe;

    class CommandeAllumerLampe implements \App\Commandes\Commande {

        public \App\Objets\Lampe $lampe;

        public function __construct(\App\Objets\Lampe $lampe) {
            $this->lampe = $lampe;
        }

        public function executer() {
            $this->lampe->marche();
        }

        public function annuler() {
            $this->lampe->arret();
        }

    }

?>