<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Framework/Controleur.php';

class ControleurNousContacter extends Controleur {

  public function __construct() {
    
  }

  // Affiche la liste de tous les genres du blogrequire 'Vue/_Commun/menuNavigation.php'
  public function index() {
    $this->genererVue();
  }

  public function envoyer() {
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $courriel = $_POST['courriel'];
    $msg = $_POST['message'];
    $TO = 'alexandre.galdeano@etu.univ-lyon1.fr';
    $h = 'From: ' . $courriel;
    $subject = '[CREAT3D-Contact] ' . $nom;
    $message = 'Entreprise : ' . $nom .
      '\nNuméro de téléphone : ' . $tel .
      '\nCourriel : ' . $courriel .
      '\nMessage : ' . $msg;

    mail($TO, $subject, $message, $h);

    $this->genererVue();
  }

}
