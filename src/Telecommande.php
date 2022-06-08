<?php

    namespace App;

    class Telecommande {

        public $commandesMarche;
        public $commandesArret;

        public function __construct() {
            $pasDeCommandes = new \App\Commandes\PasDeCommande();
            for ($i = 0; $i < 7; $i++) {
                $this->commandesMarche[$i] = $pasDeCommandes;
                $this->commandesArret[$i] = $pasDeCommandes;
            }
        }

        public function setCommande($emplacement, \App\Commandes\Commande $commandeMarche, \App\Commandes\Commande $commandeArret) {
            $this->commandesMarche[$emplacement] = $commandeMarche;
            $this->commandesArret[$emplacement]  = $commandeArret;
        }

        public function boutonMarchePresse($emplacement) {
            $this->commandesMarche[$emplacement]->executer();
        }

        public function boutonArretPresse($emplacement) {
            $this->commandesArret[$emplacement]->executer();
        }

    }

?>