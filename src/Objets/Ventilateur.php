<?php

    namespace App\Objets;

    class Ventilateur {

        private $piece;
        private $vitesse;
        public static $RAPIDE = 3;
        public static $MOYEN  = 2;
        public static $LENT   = 1;
        public static $ARRET  = 0;

        public function __construct($piece) {
            $this->piece = $piece; 
            $this->vitesse = self::$ARRET;           
        }

        public function marche() {
            echo $this->piece . " : ventilateur allumé";
        }

        public function arret() {
            $this->vitesse = self::$ARRET;
            echo $this->piece . " : ventilateur éteint";
        }

        public function rapide() {
            $this->vitesse = self::$RAPIDE;
            echo $this->piece . " : ventilateur allumé à vitesse rapide";
        }

        public function moyen() {
            $this->vitesse = self::$MOYEN;
            echo $this->piece . " : ventilateur allumé à vitesse moyenne";

        }

        public function lent() {
            $this->vitesse = self::$LENT;
            echo $this->piece . " : ventilateur allumé à vitesse lente";
        }

        public function getVitesse() {
            return $this->vitesse;
        }

    }

?>