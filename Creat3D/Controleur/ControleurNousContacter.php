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
    $endl = '\n';

    $boundary = "-----=" . md5(rand());
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $courriel = $_POST['courriel'];
    $msg = $_POST['message'];
    $TO = 'alexandre.galdeano@etu.univ-lyon1.fr';
    $msg = 'Entreprise : ' . $nom . '\nNuméro de téléphone : ' . $tel . '\nCourriel : ' . $courriel . '\nMessage : ' . $msg;
    
    $subject = '[CREAT3D-Contact] ' . $nom;
    
    mail($TO, $subject, $this->message($msg, $boundary, $endl), $this->header($nom, $courriel, $boundary, $endl));

    $this->genererVue();
  }
  
  private function header($nom, $courriel, $boundary, $endl)
  {
    $header = 'From: \"' . $nom . '\"<' . $courriel . '>' . $endl;
    $header .= 'Reply-to: \"' . $nom . '\"<' . $courriel . '>' . $endl;
    $header .= "MIME-Version: 1.0" . $endl;
    $header .= "Content-Type: multipart/alternative;" . $endl . " boundary=\"'.$boundary.'\"" . $endl;

    return $header;
  }
  
  private function message($msg, $boundary, $endl)
  {
    $message = $endl . "--" . $boundary . $endl;
    $message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $endl;
    $message .= "Content-Transfer-Encoding: 8bit" . $endl;
    $message .= $endl;
    $message .= $msg;
    $message .= $endl;
    $message.= $endl . "--" . $boundary . "--" . $endl;
    $message.= $endl . "--" . $boundary . "--" . $endl;
    return $message;
  }
}
