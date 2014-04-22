<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Modele/Genre.php';
require_once 'Modele/Jeu.php';
require_once 'Controleur/ControleurPersonnalise.php';
class ControleurNavigation extends ControleurPersonnalise {

  public $jeu;
  public $genre;
  public $genres;

  public function __construct() {
    $this->jeu = new Jeu();
    $this->genre = new Genre();
    $this->genres = new Genre();
  }

  public function index() {
    $idGenre = $this->requete->getParametre("id");
    $genre = $this->genre->getGenre($idGenre);
    $jeux = $this->jeu->getJeux($idGenre);
    $nbJeuxParGenre = $this->genre->getNbJeuParGenre();
    $this->genererVue(array('genre' => $genre, 'jeux' => $jeux, 'nbJeuxParGenre' => $nbJeuxParGenre, 'idGenre' => $idGenre));
  }

  public function jeu() {
    $idJeu = $this->requete->getParametre("id");
    $jeu = $this->jeu->getJeu($idJeu);
    $nbJeuxParGenre = $this->genre->getNbJeuParGenre();
    $this->genererVue(array('jeu' => $jeu,'nbJeuxParGenre' => $nbJeuxParGenre));
  }
}
