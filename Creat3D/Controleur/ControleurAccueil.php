<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Framework/Controleur.php';

class ControleurAccueil extends Controleur {
    private $titre;
    public function __construct() {
      $this->titre="Accueil";
    }


    // Affiche la liste de tous les genres du blogrequire 'Vue/_Commun/menuNavigation.php'
    public function index() {
      $titre=$this->titre;
    $this->genererVue(array('title' => $titre));
    }

}