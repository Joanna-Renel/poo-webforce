<?php

/////////// PHP PROCEDURAL :
// Je crée une variable article pour un article.
// Pour créer plusieurs articles, on doit recréer d'autres variables.
// $article = array(
//     'titre' => 'POO',
//     'auteur' => 'Joanna',

// );

// var_dump($article);

////////// PHP OBJET ou Programmation Orienté Objet : plus sécurisé et réutilisable

// PHP objet ou POO (Programmation Orienté Objet)
// On crée une class "article" avec différents attributs.
// que l'on pourra réutiliser pour créer différents articles.
// La class = moule à gâteau. Je prépare les ingrédients du gâteau :
// Public, private et protected sont 3 portées de variables différentes.

// class article {
//     public $titre;
//     public $auteur;
//     public $resume;
// }

// On peut aussi donner une valeur par défaut (sinon valeur= NULL) aux attributs directement dans la class
// La class contient des attributs, des méthodes et des constantes.
class article {

    // Attributs
    public $titre = "J'aime les objets";
    public $auteur ="Joanna Rénel";
    public $resume = "Ceci est un test";

    // Constantes
    
    // Les constantes sont des variables dont la valeur ne change pas.
    // Ex : Pour une class voitures, on peut créer une constante roues = 4
    // car une voiture aura tjs 4 roues.
    const NBRE_PAGE = 200;

    // Méthodes
    public function lire(){
        // echo "Je lis des livres";
    }

    // Constructeur
    public function __construct($titre, $auteur, $resume){
		
		$this->titre = $titre; // évite public $titre = "J'aime les objets";
		$this->auteur = $auteur;
		$this->resume = $resume;
	}

}


// Les class permettent de sécuriser le code et de ne pas faire de DRY (Don't Repeat Yourself)
// L'orientation objet permet de simplifier l'utilisation et de gagner du temps
// (en évitant de dupliquer le code)
// Tout ce qu'on fait en POO peut être fait en procédural

// On instancie un nouvel objet (avec "new") en réutilisant la même class Article.
// Pour utiliser la class (accéder aux attributs de la class), on doit instancier/créer 
// un nouvel objet avec la class article

$art = new Article();
$art2 = new Article();

// var_dump($art);
// var_dump($art2);


// Pour afficher les objets créés, on utilise le var_dump

// var_dump($art); // Affichera tout ce que l'on passe en arguement : strings, variables...

// Echo permettra d'afficher des strings comme suit :
// On appelle les variables (on y accède) de la class en utilisant la flèche

// echo $art->titre . 'auteur' . $art->auteur;

// Pour appeler les constantes, on utilisera :

// echo Article::NBRE_PAGE;

$test = new Article("Mon titre", "Mousssa", "Ceci est un test ");

$wf = new Article("webforce", "POO", "mon resume");

$wf3 = new Article("test", "POO", "mon resume");$wf = new Article("webforce", "POO", "mon resume");



var_dump($test, $wf);


?>