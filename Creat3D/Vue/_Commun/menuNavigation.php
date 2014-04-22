<div class="col-md-2">
  <h3>Genre</h3>
  <div class="list-group">
    <?php foreach ($nbJeuxParGenre as $genreNav): ?>
      <a class="list-group-item" href="navigation/index/<?= $genreNav['id'] ?>" 
      <?php if(isset($idGenre)&&$idGenre==$genreNav['id']): ?>
         style="background-color: #cccccc;"
      <?php endif; ?>  
         >
        <?= $this->nettoyer($genreNav['nom']) ?> (<?= $this->nettoyer($genreNav['occurrence']) ?>)
      </a>
    <?php endforeach; ?>
  </div>
</div>
