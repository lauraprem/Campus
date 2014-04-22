<?php
if (isset($jeu)):
    $this->titre = $this->nettoyer($jeu['nom']);
else :
    $this->titre = "Jeu";
endif;
?>
<div class="row">
    <?php include_once("/Vue/_Commun/menuNavigation.php") ?>
    <div class="col-md-10">

        <div class="row">
            <div class="col-md-12">
                <h1><?= $this->nettoyer($jeu['nom']) ?>
              <a class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> Acheter</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="Contenu/Images/<?= $this->nettoyer($jeu['image']) ?>.jpg" alt="Image de <?= $this->nettoyer($jeu['nom']) ?>" class="img-responsive">
            </div>
            <div class="col-md-8">
                <div class="row col-vert-centered-2">
                    Prix : <?= $this->nettoyer($jeu['prix']) ?> €
                </div>
                <div class="row col-vert-centered-2">
                    Studio : <?= $this->nettoyer($jeu['nomStudio']) ?>
                </div>
                <div class="row col-vert-centered-2">
                    Date d'ajout : <?= $this->nettoyer($jeu['date']) ?>
                </div>
            </div>
        </div>
      <br/>
    </div>
</div>