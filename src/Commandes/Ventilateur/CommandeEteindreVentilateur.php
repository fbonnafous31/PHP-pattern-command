<?php

    namespace App\Commandes\Ventilateur;

    use \App\Objets\Ventilateur;

    class CommandeEteindreVentilateur implements \App\Commandes\Commande {

        public \App\Objets\Ventilateur $ventilateur;

        public function __construct(\App\Objets\Ventilateur $ventilateur) {
            $this->ventilateur = $ventilateur;
        }

        public function executer() {
            $this->derniereVitesse = $this->ventilateur->getVitesse();
            $this->ventilateur->arret();
        }

        public function annuler(){
            If ($this->derniereVitesse == Ventilateur::$RAPIDE) {
                $this->ventilateur->rapide();
            } Else If ($this->derniereVitesse == Ventilateur::$MOYEN) {
                $this->ventilateur->moyen();
            } Else If ($this->derniereVitesse == Ventilateur::$LENT) {
                $this->ventilateur->lent();
            } Else If ($this->derniereVitesse == Ventilateur::$ARRET) {
                $this->ventilateur->arret();
            }
        }

    }

?>