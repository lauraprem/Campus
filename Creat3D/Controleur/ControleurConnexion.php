<?php


require_once 'Controleur/ControleurPersonnalise.php';
require_once 'Modele/Client.php';

class ControleurConnexion extends ControleurPersonnalise {

  private $client;

  public function __construct() {
    $this->client = new Client();
  }

  public function index() {
    $this->genererVue();
  }

  public function connecter() {
      if ($this->requete->existeParametre("courriel") &&
                $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->client->connecter($login, $mdp)) {
                $client = $this->client->getUtilisateur($login, $mdp);
                // $this->requete->getSession()->setAttribut("idUtilisateur", $utilisateur['idUtilisateur']);
                //   $this->requete->getSession()->setAttribut("login", $utilisateur['login']);
                $this->rediriger("accueil");
            } else {
                $this->genererVue(array('msgErreur' =>
                    'Login ou mot de passe incorrects'), "index");
            }
        } else {
            throw new Exception(
            "Action impossible : login ou mot de passe non défini");
        }
    }

  public function deconnecter() {
    $this->requete->getSession()->detruire();
    $this->rediriger("accueil");
  }
  
//  public function inscrire($nom, $prenom, $adresse, $codepostal, $ville, $courriel, $mdp)
//  {
//      $this->client->addClient($prenom,$nom,$adresse,$codepostal,$ville,$courriel,$mdp);
//      $this->genererVue();
//  }
//  
    public function inscrire()
  {
      $this->client->addClient($_POST['prenom'],$_POST['nom'],$_POST['adresse'],$_POST['codePostal'],$_POST['ville'],$_POST['courriel'],$_POST['mdp']);
      $this->rediriger("accueil");
  }

}
