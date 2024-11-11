<?php

// je crée une nouvelle classe que j'appelle 'Pyramide'
class Pyramide
{
    /**
     * Propriété qui accueillera le résultat
     *
     * @var string
     */
    private string $_resultat = "";

    /**
     * Constructeur() qui exécute à chaque nouvelle instance la méthode 'setPyramide()'
     */
    public function __construct()
    {
        $this->setPyramide();
    }

    /**
     * setter (mutateur)
     * Va exécuter une boucle 'for()' qui va tourner tant que la valeur de la variable '$i' sera inférieure à '20'
     * À chaque tour de boucle, on va afficher le nombre d'étoiles équivalent à la valeur de '$i'
     *
     * @return void
     */
    public function setPyramide()
    {
        for($i = 0; $i < 20; $i++)
        {
            $this->_resultat .= "<p>" . str_repeat("*", $i) . "</p>";
        }
    }

    /**
     * getter (accesseur)
     * Retourne la propriété privée de type 'string' : '$_resultat'
     *
     * @return void
     */
    public function getPyramide()
    {
        return $this->_resultat;
    }
}