<?php

    use App\TelecommandeSimple;

    require_once('libraries/autoload.php');

    $telecommande = new TelecommandeSimple();
    $lampe = new App\Objets\Lampe();
    $porteGarage = new App\Objets\PorteGarage();
    $lampeAllumee = new \App\Commandes\Lampe\CommandeAllumerLampe($lampe);
    $porteGarageOuverte = new \App\Commandes\PorteGarage\CommandeOuvrirPorteGarage($porteGarage);

    $telecommande->setCommande($lampeAllumee);
    $telecommande->boutonPresse();
    echo "<br>";

    $telecommande->setCommande($porteGarageOuverte);
    $telecommande->boutonPresse();

?>