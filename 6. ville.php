<?php
// Écrivez une classe représentant une ville. 
// Elle doit avoir les propriétés nom et département et une méthode affichant « la ville X est dans le département Y ». 
class Ville {
    private $nom;
    private $departement;

    public function nomDeLaVille($nom, $departement){
        echo "La ville " . $nom . " est dans le département " . $departement . ".";
    }

// Créez une ville et department par défaut
// Créez des objets ville, affectez leurs propriétés et utilisez la méthode d’affichage.
    function __construct($nom, $departement){
        $this->nom = $nom;
        $this->departement = $departement;
    }
}

$nouvelleVille = new Ville ("Paris", "Ile-de-France");
var_dump($nouvelleVille);
$nouvelleVille->nomDeLaVille("Paris", "Ile-de-France");

?>