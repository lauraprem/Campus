<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <base href="<?= $racineWeb ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $racineWeb ?>Librairies/bootstrap/css/united.min.css" rel="stylesheet" media="screen">
    <link href="<?= $racineWeb ?>Contenu/style.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="<?= $racineWeb ?>Librairies/date_heure.js"></script>
    <title><?= $this->titre ?></title> 
  </head>
  <body>
    <div class='container'>
      <?php include_once("_Commun/barreNavigation.php"); ?>
      <?= $contenu ?>
      <br/>
      <footer>
        <div class="row">
          <div class="col-md-12 text-center">
            Auteurs : FAGNO Corinne, GALDEANO Alexandre, PREMILLIEU Laura
          </div>
        </div>
      </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Librairies/bootstrap/js/bootstrap.min.js"></script>
    

  </body>
</html>
