<?php
/**
 * enable utils and autoloader
 */
require_once("bootstrap.php");
use Main\Rectangle;
use Main\Carre;





// B.1. Créer un Rectangle appelé 'ra' ayant 12 de longeur et 7 de largeur.

// B.2.1 Afficher son périmètre et son aire
$ra = new Rectangle(12,7);
// B.1.1 Afficher son périmètre et son aire.
echo "Le périmètre du rectangle est {$ra->perimeter()}<br/>";
echo "L'aire' du rectangle est {$ra->area()}<br/><hr>";

// B.2 Créer un Carré appelé 'ca' ayant 5.6 de coté
$ca = new Carre(5.6);
echo "Le périmètre du carré est {$ca->perimeter()}<br/>";
echo "L'aire' du carré est {$ca->area()}<br/>";

Utils::debug(array($ca));