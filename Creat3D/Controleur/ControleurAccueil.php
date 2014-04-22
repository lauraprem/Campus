<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Modele/Genre.php';
require_once 'Controleur/ControleurPersonnalise.php';

class ControleurAccueil extends ControleurPersonnalise {

    private $genre;

    public function __construct() {
        $this->genre = new Genre();
    }

    // Affiche la liste de tous les genres du blogrequire 'Vue/_Commun/menuNavigation.php'
    public function index() {
        $genres = $this->genre->getGenres();
        $nbJeuxParGenre = $this->genre->getNbJeuParGenre();
        $this->genererVue(array('genres' => $genres,'nbJeuxParGenre' => $nbJeuxParGenre));
    }

}