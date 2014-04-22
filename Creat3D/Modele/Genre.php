<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Framework/Modele.php';

class Genre extends Modele{

// Renvois les attributs d'un genre à partir de son id
public function getGenre($idg)
{
    $sql = 'select GEN_ID as id, GEN_NOM as nom from t_genre where GEN_ID=?';
    $genre = $this->executerRequete($sql, array($idg));
    if($genre->rowCount() == 1)
    { return $genre->fetch();}
    else
    {throw new Exception("Auncun genre de jeu ne correspond à l'identifiant '$idg'"); }
}
    
//Récupère les genres de la base de données
public function getGenres() 
{
    $sql = 'select GEN_ID as id, GEN_NOM as nom '
      .'from t_genre '
      .'order by GEN_NOM desc';
    $genres = $this->executerRequete($sql);
    return $genres;
}

//Permet de savoir combien il a de jeux par genre
public function getNbJeuParGenre()
{
    $sql = 'select GEN_ID as id, count(*) as occurrence, GEN_NOM as nom'
            .' FROM t_jeu Natural Join t_genre'
            .' GROUP BY GEN_ID';
    $res = $this->executerRequete($sql);
    return $res;
}
}

