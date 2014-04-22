<?php

require_once 'Framework/Modele.php';

class Client extends Modele {

    public function getClient($id) { // controleur client extends controleur securise
        $sql = 'select CLI_ID as id, CLI_PRENOM as prenom, CLI_NOM as nom, CLI_ADRESSE as adresse, ' .
                'CLI_CODEPOSTAL as codePostal, CLI_VILLE as ville, CLI_COURRIEL as courriel, ' .
                'CLI_MDP as mdp from t_client where CLI_ID=?';
        $client = $this->executerRequete($sql, array($id));
        if ($client->rowCount() == 1) {
            return $client->fetch();
        } else {
            throw new Exception("Auncun client ne correspond à l'identifiant '$id'");
        }
    }

    public function setClient($prenom, $nom, $adresse, $codePostal, $ville, $courriel, $mdp, $id) {
        $sql = 'UPDATE t_client SET CLI_PRENOM=?, CLI_NOM=?, CLI_ADRESSE=?, ' .
                'CLI_CODEPOSTAL=?, CLI_VILLE=?, CLI_COURRIEL=?, CLI_MDP=?' .
                ' WHERE CLI_ID =?';
        $client = $this->executerRequete($sql, array($id));
        if ($client->rowCount() == 1) {
            return $client->fetch();
        } else {
            throw new Exception("Auncun client ne correspond à l'identifiant '$id'");
        }
    }

    public function addClient($prenom, $nom, $adresse, $codePostal, $ville, $courriel, $mdp) {
        $sql = 'INSERT INTO t_client ( CLI_PRENOM, CLI_NOM, CLI_ADRESSE, 
                CLI_CODEPOSTAL, CLI_VILLE, CLI_COURRIEL, CLI_MDP) VALUES (
                ?, ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($prenom, $nom, $adresse, $codePostal, $ville, $courriel, $mdp));
    }

    public function getPrenomClient($id) {
        $sql = 'select CLI_ID as id, CLI_PRENOM as prenom from t_client where CLI_ID=?';
        $client = $this->executerRequete($sql, array($id));
        if ($client->rowCount() == 1) {
            return $client->fetch();
        } else {
            throw new Exception("Auncun client ne correspond à l'identifiant '$id'");
        }
    }

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connecter($login, $mdp) {
        $sql = "select CLI_ID from T_CLIENT where CLI_COURRIEL=? and CLI_MDP=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        return ($utilisateur->rowCount() == 1);
    }

    /**
     * Renvoie un utilisateur existant dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUtilisateur($login, $mdp) {
        $sql = "select CLI_ID as idUtilisateur, CLI_COURRIEL as login, CLI_MDP as mdp
 from T_CLIENT where CLI_COURRIEL=? and CLI_MDP=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch(); // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants
 fournis");
    }

}
