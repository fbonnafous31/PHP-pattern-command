<?php

use App\Telecommande;
use App\TelecommandeSimple;

    require_once('libraries/autoload.php');

    echo "<b>Télécommande Simple</b> <br>";
    $telecommande = new TelecommandeSimple();
    $lampe = new App\Objets\Lampe('Séjour');
    $porteGarage = new App\Objets\Porte('Garage');
    $lampeAllumee = new \App\Commandes\Lampe\CommandeAllumerLampe($lampe);
    $porteGarageOuverte = new \App\Commandes\Porte\CommandeOuvrirPorte($porteGarage);

    $telecommande->setCommande($lampeAllumee);
    $telecommande->boutonPresse();
    echo "<br>";

    $telecommande->setCommande($porteGarageOuverte);
    $telecommande->boutonPresse();
    echo "<br><br><br>";

    $telecommande = new Telecommande();
    $lampeSejour = new \App\Objets\Lampe('Séjour');
    $lampeCuisine = new \App\Objets\Lampe('Cuisine');
    $ventilateurSejour = new \App\Objets\Ventilateur('Séjour');
    $porteGarage = new \App\Objets\Porte('Garage');
    $stereoSejour = new \App\Objets\Stereo('Séjour');

    $lampeSejourAllumee = new \App\Commandes\Lampe\CommandeAllumerLampe($lampeSejour);
    $lampeCuisineAllumee = new \App\Commandes\Lampe\CommandeAllumerLampe($lampeCuisine);
    $ventilateurSejourAllume = new \App\Commandes\Ventilateur\CommandeAllumerVentilateur($ventilateurSejour);
    $porteGarageOuverte = new \App\Commandes\Porte\CommandeOuvrirPorte($porteGarage);
    $stereoSejourAllumee = new \App\Commandes\Stereo\CommandeAllumerStereoAvecCD($stereoSejour);

    $lampeSejourEteinte = new \App\Commandes\Lampe\CommandeEteindreLampe($lampeSejour);
    $lampeCuisineEteinte = new \App\Commandes\Lampe\CommandeEteindreLampe($lampeCuisine);
    $ventilateurSejourEteint = new \App\Commandes\Ventilateur\CommandeEteindreVentilateur($ventilateurSejour);
    $porteGarageFermee = new \App\Commandes\Porte\CommandeFermerPorte($porteGarage);
    $stereoSejourEteinte = new \App\Commandes\Stereo\CommandeEteindreStereo($stereoSejour);

    $telecommande->setCommande(0, $lampeSejourAllumee, $lampeSejourEteinte);
    $telecommande->setCommande(1, $lampeCuisineAllumee, $lampeCuisineEteinte);
    $telecommande->setCommande(2, $ventilateurSejourAllume, $ventilateurSejourEteint);
    $telecommande->setCommande(3, $porteGarageOuverte, $porteGarageFermee);
    $telecommande->setCommande(4, $stereoSejourAllumee, $stereoSejourEteinte);

    echo "<b>Télécommande multi-canaux</b> <br>";
    for ($i = 0; $i < 5; $i++) {
        echo "Commande $i <br>" ;
        $telecommande->boutonMarchePresse($i);
        echo '<br>';
        $telecommande->boutonArretPresse($i);
        echo '<br><br>';
    }

?>