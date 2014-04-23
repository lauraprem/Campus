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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>

      (function($) {
        $.fn.juizScrollTo = function(speed, v_indent) {

          if (!speed)
            var speed = 'slow';
          if (!v_indent)
            var v_indent = 0;

          return this.each(function() {
            $(this).click(function() {

              var goscroll = false;
              var the_hash = $(this).attr("href");
              var regex = new RegExp("\#(.*)", "gi");

              if (the_hash.match("\#(.+)")) {

                the_hash = the_hash.replace(regex, "$1");

                if ($("#" + the_hash).length > 0) {
                  the_element = "#" + the_hash;
                  goscroll = true;
                }
                else if ($("a[name=" + the_hash + "]").length > 0) {
                  the_element = "a[name=" + the_hash + "]";
                  goscroll = true;
                }

                if (goscroll) {
                  var container = 'html';
                  if ($.browser.webkit)
                    container = 'body';

                  $(container).animate({
                    scrollTop: $(the_element).offset().top + v_indent
                  }, speed,
                          function() {
                            $(the_element).attr('tabindex', '0').focus().removeAttr('tabindex');
                          });
                  return false;
                }
              }
            });
          });
        };
      })(jQuery)

      $('a:first').juizScrollTo('fast', -75);
      $('a:not(:first)').juizScrollTo('slow');

    </script>

  </body>
</html>
