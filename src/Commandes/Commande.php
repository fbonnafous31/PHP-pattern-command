<?php

    namespace App\Commandes;

    interface Commande {

        public function executer();
        public function annuler();

    }

?>