<?php

/**
 * enable utils and autoloader
 */

require_once("bootstrap.php");
require_once("classes/Forme2D.php");
require_once("classes/Forme3D.php");
require_once("classes/Rectangle.php");
require_once("classes/Carre.php");
require_once("classes/ParaRectangle.php");
require_once("classes/Cube.php");

// B.1. Créer un Rectangle appelé 'ra' ayant 12 de longeur et 7 de largeur.

// B.2.1 Afficher son périmètre et son aire
$ra = new Rectangle(12,7);
// B.1.1 Afficher son périmètre et son aire.
echo "Le périmètre du rectangle est {$ra->perimeter()}<br/>";
echo "L'aire' du rectangle est {$ra->area()}<br/><hr>";

// B.2 Créer un Carré appelé 'ca' ayant 5.6 de coté
$ca = new Carre(5.6);
echo "Le périmètre du carré est {$ca->perimeter()}<br/>";
echo "L'aire du carré est {$ca->area()}<br/><hr>";

//Créer un ParaRectangle 'pra' de longeur 11, de largeur 6 et de hauteur 4 puis afficher son volume
$pra = new ParaRectangle(11,6,4);
echo "Le volume du para rectangle est {$pra->volume()}<br/><hr>";
//D.5 Créer un Cube 'cua' de coté 8. Afficher son volume.
$cua = new Cube(8);
echo "Le volume du cube est {$cua->volume()}<br/><hr>";

Utils::debug(array($cua->volume()));