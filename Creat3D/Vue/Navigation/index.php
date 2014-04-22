<?php if (isset ($genre)): 
    $this->titre = $this->nettoyer($genre['nom']); 
else :
    $this->titre = "Genres de jeux";
endif;?>
<div class="row">
    <?php include_once("/Vue/_Commun/menuNavigation.php") ?>
    <div class="col-md-10">
        <div class = "row">
        <h1><?= $this->nettoyer($genre['nom'])?></h1>
        <hr/>
            <?php 
            foreach ($jeux as $jeu ):            
            ?>
                        
            <div class="col-xs-6 col-md-3">
                <a href ="navigation/jeu/<?= $jeu['id'] ?>" data-toggle="tooltip" data-placement="bottom"  title="<?=$this->nettoyer($jeu['nom'])?>" class="thumbnail "> 
                    <img src="Contenu/Images/<?=$this->nettoyer($jeu['image'])?>.jpg" alt="Image de <?=$this->nettoyer($jeu['nom'])?>" class="img-jeu img-responsive">
                </a>
            </div>
            <?php  endforeach;?>
        </div>
    </div>
</div>