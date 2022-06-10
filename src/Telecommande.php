<?php

    namespace App;

    class Telecommande {

        public \App\Commandes\Commande $commandeAnnulation;

        public function __construct() {
            $pasDeCommandes = new \App\Commandes\PasDeCommande();
            for ($i = 0; $i < 7; $i++) {
                $this->commandesMarche[$i] = $pasDeCommandes;
                $this->commandesArret[$i] = $pasDeCommandes;
            }
            $this->commandeAnnulation = $pasDeCommandes;
        }

        public function setCommande($emplacement, \App\Commandes\Commande $commandeMarche, \App\Commandes\Commande $commandeArret) {
            $this->commandesMarche[$emplacement] = $commandeMarche;
            $this->commandesArret[$emplacement]  = $commandeArret;
        }

        public function boutonMarchePresse($emplacement) {
            $this->commandesMarche[$emplacement]->executer();
            $this->commandeAnnulation = $this->commandesMarche[$emplacement];
        }

        public function boutonArretPresse($emplacement) {
            $this->commandesArret[$emplacement]->executer();
            $this->commandeAnnulation = $this->commandesArret[$emplacement];
        }

        public function boutonAnnulPresse() {
            $this->commandeAnnulation->annuler();
        }

    }

?>