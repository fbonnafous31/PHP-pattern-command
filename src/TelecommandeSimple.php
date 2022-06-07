<?php

    namespace App;

    class TelecommandeSimple {

        public \App\Commandes\Commande $emplacement;

        public function __construct() {}

        public function setCommande(\App\Commandes\Commande $commande) {
            $this->emplacement = $commande;
        }

        public function boutonPresse() {
            $this->emplacement->executer();
        }

    }

?>