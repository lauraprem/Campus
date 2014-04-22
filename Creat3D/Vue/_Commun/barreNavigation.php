
<nav class="navbar navbar-default" role="navigation">
  <a class="navbar-brand" href=""><span class="glyphicon glyphicon-home"></span> Creat3D</a>
  <?php if(isset($client)) : ?>
  <div class="btn-group pull-right">
  <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?= $client['prenom'] ?>  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><span class="glyphicon glyphicon-edit"></span> Mes informations personnelles</li>
    <li class="divider"></li>
    <li><a href="Connexion/deconnecter"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>
  </ul>
</div>
  <?php else : ?>
  <a class="btn btn-info pull-right" href="Connexion"><span class="glyphicon glyphicon-arrow-right"></span> Connexion</a>
  <?php endif; ?>
</nav>