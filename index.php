<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Sylvie");


// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("Saphira");

$princess = new Princesse();


$witch = new Sorcier();


echo "La princesse s'appelle " . $princess->getNom() . ". Elle a " . $princess->getVie() . " points de vie.<br>
Elle est à la position x = " . $princess->x . " et y = " . $princess->y;

echo "<br><br>";

echo "Le sorcier s'appelle " . $witch->getNom() . ". Il a " . $witch->getVie() . " points de vie.<br>
Il est à la position x = " . $witch->x . " et y = " . $witch->y;

echo "<br><br>";
$princess->setNom("Aria");
$princess->x = 150;
$princess->y = 200;
$princess->setVie(60);

$witch->setNom("Geralt");
$witch->x = 200;
$witch->y = 300;
$witch->setVie(100);

echo "Après modifications : <br><br>";

echo $princess->getNom() . " a " . $princess->getVie() . " points de vie.
Elle est à la position x = " . $princess->x . " et y = " . $princess->y;

echo "<br><br>";

echo $witch->getNom() . " a " . $witch->getVie() . " points de vie.
Il est à la position x = " . $witch->x . " et y = " . $witch->y;