<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Framework/Controleur.php';

class ControleurApropos extends Controleur {
    private $titre;
    public function __construct() {
      $this->titretitre="A propos";
    }

    // Affiche la liste de tous les genres du blogrequire 'Vue/_Commun/menuNavigation.php'
    public function index() {
      $titre=$this->titre;
    $this->genererVue(array('title' => $titre));
    }

}