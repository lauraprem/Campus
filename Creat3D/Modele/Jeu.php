<?php

require_once 'Framework/Modele.php';

class Jeu extends Modele {

    //Récupère les jeux de la base de données
    public function getJeux($idGenre) {
        $sql = 'select JEU_ID as id, JEU_NOM as nom, JEU_DATEAJOUT as date' .
                ', JEU_PRIX as prix, JEU_IMAGE as image, STU_ID as idStudio, GEN_ID as idGenre '
                . 'from t_jeu '
                . 'where GEN_ID=?'
                . 'order by JEU_NOM';
        $jeux = $this->executerRequete($sql, array($idGenre));
        return $jeux;
    }

    //Récupère un jeu en fonction de son id
    public function getJeu($id) {
        $sql = 'select JEU_ID as id, JEU_NOM as nom, JEU_DATEAJOUT as date' .
                ', JEU_PRIX as prix, JEU_IMAGE as image, j.STU_ID as idStudio, j.GEN_ID as idGenre,  '
                . 'GEN_NOM as nomGenre, STU_NOM as nomStudio '
                . 'from t_jeu j, t_genre g, t_studio s '
                . 'where JEU_ID=? AND j.STU_ID = s.STU_ID AND j.GEN_ID = g.GEN_ID';
        $jeu = $this->executerRequete($sql, array($id));
        if ($jeu->rowCount() == 1) {
            return $jeu->fetch();
        } else {
            throw new Exception("Auncun jeu ne correspond à l'identifiant '$id'");
        }
    }

    public function ajouterJeu($nom, $date, $prix, $image, $idStudio, $idGenre) {
        $sql = 'insert into t_jeu(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
                . ' values(?, ?, ?, ?, ?, ?)';
        $date = date(DATE_W3C);
        $this->executerRequete($sql, array($nom, $date, $prix, $image, $idStudio, $idGenre));
    }

}
