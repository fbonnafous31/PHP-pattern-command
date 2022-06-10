<?php

    namespace App\Commandes\Porte;

    class CommandeFermerPorte implements \App\Commandes\Commande {

        public \App\Objets\Porte $porte;

        public function __construct(\App\Objets\Porte $porte) {
            $this->porte = $porte;
        }

        public function executer() {
            $this->porte->fermer();
        }

        public function annuler(){}

    }

?>