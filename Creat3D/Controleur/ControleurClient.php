<?php
require_once 'Controleur/ControleurSecurise.php';
class ControleurClient extends ControleurSecurise {

    private $client;
    
    public function index() {
        $idClient = $this->requete->getParametre("id");
        $this->client = getClient($idClient);
        $this->genererVue(array('client' => $this->client));
    }

}
