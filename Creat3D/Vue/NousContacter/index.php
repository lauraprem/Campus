<?php $this->titre = "Nous Contacter"; ?>
<div class="row">
    <?php include_once("/Vue/_Commun/menuNavigation.php") ?>
    <div class="col-md-10">
        <h2 class="text-center">Nous contacter</h2>
        <div class="well">
            <div class="row">
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="connexion">
                    <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
                        <div class="form-group">
                            <br/>
                            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <input name="nom" type="text" class="form-control" placeholder="Entrez le nom de votre entreprise" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <input name="tel" type="tel" class="form-control" placeholder="Entrez votre numero de telephone" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <input name="courriel" type="email" class="form-control" placeholder="Entrez votre courriel" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <textarea name="message" type="text" class="form-control" placeholder="Entrez votre message" required style="height: 150px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-default btn-primary center-block"><span class="glyphicon glyphicon-log-in"></span> Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>