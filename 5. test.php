<?php

require("personne.php");
require("direction.php");

// "Use" est le mot-clé qui permet d'utiliser un namespace
// 

use Ecole\Etudiant; //
use Ecole\Direction;

// On peut utiliser la même class dans 2 namespaces différents.

// Ici, on instancie une nouvelle personne dans le namespace Etudiant
$joanna = new Etudiant\personne();
// Ici, on instancie une nouvelle personne dans le namespace Direction
$marieFrance = new Direction\personne();

// Les 2 class "personne" ont la même fonction (créer de nouvelles personnes),
// mais ont des attributs différents.

echo "<pre>";
var_dump($joanna);
echo "</pre>";

echo "<pre>";
var_dump($marieFrance);
echo "</pre>";

//////////////////// Méthodes magiques = méthodes prédéfinies en PHP
// clone, destructeur, constructeur, toString...

// Le constructeur est une méthode qui permet d'accéder à une class rapidement.
// Au moment où on instancie un nouvel objet,
// le constructeur va attribuer des valeurs par défaut aux variables de la class
// function_constr()/ constructeur est appelé au moment où le nouvel objet est instancié
// L'avantage du constructeur avec paramètres,
// c'est d'éviter d'attribuer une valeur de départ à la variable
// Le constructeur est toujours public
?>