<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Framework/Controleur.php';

class ControleurNotreOffre extends Controleur {
    public function __construct() {
    }


    // Affiche la liste de tous les genres du blogrequire 'Vue/_Commun/menuNavigation.php'
    public function index() {
    $this->genererVue();
    }

}