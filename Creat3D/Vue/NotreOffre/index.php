<?php $this->titre = "Notre Offre"; ?>
<div class="row">
  <?php include_once("/Vue/_Commun/menuNavigation.php") ?>
  <div class="col-md-10">

    <h1>Imprimer une maquette 3D, c'est facile!</h1>
    <br/>
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              &Eacute;tape 1 : je choisi mon matériau
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
            <img class="img-responsive" src="Contenu/Images/materiau.bmp" alt="Copyright all reserved" style ="max-height: 350px" />
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
              &Eacute;tape 2 : je choisi ma taille
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Exemples : <br>
              35x35x20cm<br>
              70x70x40cm<br>
              105x105x60cm</p></div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
              &Eacute;tape 3 : je choisi mes finitions
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Exemples : <br>
              Polissage <br>
              Peinture<br>
              Autre ...</p></div>
        </div>
      </div>
    </div>
    
    <h2>Pour obtenir un devis de votre maquette : 
      <a href = "nousContacter" >nous contacter</a></h2>
  </div>
</div>