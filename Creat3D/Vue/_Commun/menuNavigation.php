<?php $style="style='background-color: rgb(175,235,235);'" ?>
<div class="col-md-2">
  <div class="list-group">
    
    <a class="list-group-item" href="notreOffre" <?php if($this->titre == "Notre Offre") echo $style; ?> ><span class="glyphicon glyphicon-gift"></span> Notre offre</a>
    <a class="list-group-item" href="notreMetier" <?php if($this->titre == "Notre Métier") echo $style; ?> ><span class="glyphicon glyphicon-print"></span> Notre métier</a>
    <a class="list-group-item" href="nousContacter" <?php if($this->titre == "Nous Contacter") echo $style; ?> ><span class="glyphicon glyphicon-envelope"></span> Nous contacter</a>
    <a class="list-group-item" href="aPropos" <?php if($this->titre == "A Propos") echo $style; ?> ><span class="glyphicon glyphicon-user"></span> &Agrave; propos</a>
  </div>
</div>
