<?php

use App\Commandes\Lampe\CommandeAllumerLampe;
use App\Telecommande;
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
    echo "<br><br>";

    $telecommande = new Telecommande();
    $lampeSejour = new \App\Objets\Lampe();
    $lampeCuisine = new \App\Objets\Lampe();
    $ventilateurSejour = new \App\Objets\Ventilateur();
    $porteGarage = new \App\Objets\PorteGarage();
    $stereoSejour = new \App\Objets\Stereo();

    $lampeSejourAllumee = new \App\Commandes\Lampe\CommandeAllumerLampe($lampeSejour);
    $lampeCuisineAllumee = new \App\Commandes\Lampe\CommandeAllumerLampe($lampeCuisine);
    $ventilateurSejourAllume = new \App\Commandes\Ventilateur\CommandeAllumerVentilateur($ventilateurSejour);
    $porteGarageOuverte = new \App\Commandes\PorteGarage\CommandeOuvrirPorteGarage($porteGarage);
    $stereoSejourAllumee = new \App\Commandes\Stereo\CommandeAllumerStereoAvecCD($stereoSejour);

    $lampeSejourEteinte = new \App\Commandes\Lampe\CommandeEteindreLampe($lampeSejour);
    $lampeCuisineEteinte = new \App\Commandes\Lampe\CommandeEteindreLampe($lampeCuisine);
    $ventilateurSejourEteint = new \App\Commandes\Ventilateur\CommandeEteindreVentilateur($ventilateurSejour);
    $porteGarageFermee = new \App\Commandes\PorteGarage\CommandeFermerPorteGarage($porteGarage);
    $steraoSejourEteinte = new \App\Commandes\Stereo\CommandeEteindreStereoAvecCD($stereoSejour);

    $telecommande->setCommande(0, $lampeSejourAllumee, $lampeSejourEteinte);
    $telecommande->setCommande(1, $lampeCuisineAllumee, $lampeCuisineEteinte);
    $telecommande->setCommande(2, $ventilateurSejourAllume, $ventilateurSejourEteint);
    $telecommande->setCommande(3, $porteGarageOuverte, $porteGarageFermee);
    $telecommande->setCommande(4, $stereoSejourAllumee, $steraoSejourEteinte);

    echo "Séjour : <br>";
    $telecommande->boutonMarchePresse(0);
    echo " / ";
    $telecommande->boutonArretPresse(0);
    echo "<br>";
    $telecommande->boutonMarchePresse(2);
    echo " / ";
    $telecommande->boutonArretPresse(2);
    echo "<br>";
    $telecommande->boutonMarchePresse(4);
    echo " / ";
    $telecommande->boutonArretPresse(4);


    echo "<br><br>Cuisine : <br>";
    $telecommande->boutonMarchePresse(1);
    echo " / ";
    $telecommande->boutonArretPresse(1);

    echo "<br><br>Garage : <br>";
    $telecommande->boutonMarchePresse(3);
    echo " / ";
    $telecommande->boutonArretPresse(3);


?>