<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Framework/Controleur.php';

abstract class ControleurPersonnalise extends Controleur
{

    protected function genererVue($donneesVue = array(), $action = null)
    {
        $client = null;
        if ($this->requete->getSession()->existeAttribut("client")) {
            $client = $this->requete->getSession()->getAttribut("client");
        }
        parent::genererVue($donneesVue + array('client' => $client), $action);
    }

}