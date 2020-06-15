<?php


class Personne {
    
    public $nom;
    private $prenom;
    public $naissance;
    private $age;

    const NBRE_BRAS = 2; // Par convention, les constantes s'écrivent en majuscules

    public function bientotlapause(){
        // echo "C'est la pause ?";
    }

    public function donneMoiLeNom($nom){
        return $this->nom = $nom; // $this fait référence à l'objet courant (Personne)
    }

    // Les accesseurs permettent d'afficher la variable
    public function getNom(){ // le get ne prend pas d'arguement
        return $this->nom; 
    }

    // Les mutateurs permettent de modifier la variable
    public function setNom(){
        return $this->nom = $nom; 
    }

    // Les accesseurs permettent d'afficher la variable
    public function getPrenom(){ // le get ne prend pas d'argument car il set juste à afficher une valeur
        return $this->prenom; 
    }

    
    public function setPrenom($prenom){
        return $this->prenom = $prenom; 
    }

    public function courir ($prenom){
        // echo $prenom . " court plus vite que Bolt.";
    }

    public function age($prenom){
        if($age >= 18){
            echo $prenom . " est majeure.";
        } else {
            echo $prenom . " est mineure.";
        }
    }
   


}
// On instancie une nouvelle personne
$joanna = new Personne();

// On attribue des valeurs aux attributs définis dans la class
// $joanna->nom = "Rénel";
// $joanna->prenom = "Joanna";

// On appelle la constante NBRE_BRAS
echo Personne::NBRE_BRAS;

echo $joanna->bientotlapause();
// echo $joanna->donneMoiLeNom("test");

/////////// PORTÉE DES VARIABLES :

// Variable locale n'est accessible que dans la class (private)
// Variable globale est définie en dehors de la fonction et accessible partout

// Par convention, il est préférable de mettre les variables en private
// pour sécuriser le code.

// Pour accéder aux variables locales ou private, on utilise les méthodes get (accès)
// et set (définition d'une fonction)
// Les geters et seters sont toujours des fonctions public
// pour accéder aux attributs qui sont private
// get => accesseur (récupère et affiche, fait un return)
// set => mutateur (définit une nouvelle valeur, permet de modifier)

// echo $joanna->getPrenom; // Renvoie NULL car $prenom n'est pas défini dans la class Personne

// Pour y remédier, on utilise la fonction set pour définir une valeur :
$joanna->setPrenom("Joanna");
$joanna->getPrenom(); // Affiche "Joanna"

// On appelle la fonction courir avec le paramètre $prenom

echo $joanna->courir($joanna->getPrenom()); // affiche "Joanna court plus vite que Bolt"

// On appelle la fonction age() :

$joanna->setAge(15);
$joanna->getAge();

echo "<pre>";
echo $joanna->age($prenom);
echo "</pre>";

///// NAMESPACE (espace de travail)

// En Php procédural, on ne peut pas nommer 2 variables ou class avec le même nom.
// En POO, pour définir des classes ou des personnes qui utilisent le même nom,
// on définit un espace de travail ou Namespace.
// (Par convention, pour chaque nouvelle class, on créé un fichier php différent)

?>