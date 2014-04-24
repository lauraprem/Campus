<?php $this->titre = "A Propos"; ?>
<div class="row">
  <?php include_once("/Vue/_Commun/menuNavigation.php") ?>
  <div class="col-md-10">
    <div class="row">
      <div class="col-md-10">
        <h1 id="titre">Génèse et contexte du projet</h1>
        <p>Ce projet a vu le jour dans le cadre du concours Campus Création. 
          Nous avons eu, dès le départ, l’envie de collaborer autour d’une 
          nouvelle technologie qui aujourd’hui devient incontournable : 
          l’impression 3D.
          Le nombre infini de possibilités offertes par cette technologie nous 
          fascine tous, et nous avons alors cherché à appliquer une nouvelle
          fois cette technologie à une opportunité d’affaires. 
        </p>
        <h1><a href="#compo">L'&eacute;quipe</a></h1>
        <p>Nous sommes sept étudiants à l’origine de ce projet de création 
          d’entreprise aux  formations différentes. Cela nous permet ainsi de 
          diversifier nos compétences et d’assumer le lancement de notre 
          entreprise sans avoir besoin d’embaucher du personnel à l’extérieur 
          du groupe.</p>
        <p>Composition :<br/>
          <a href="#actor2">Alexandre Galdéano</a>, Responsable Production<br/>
          <a href="#actor5">Laura Prémillieu</a>, Responsable Informatique<br/>
          <a href="#actor7">Tristan Salvadori</a>, Gestionnaire et Responsable Commercial<br/>
          <a href="#actor1">Corinne Fragno</a>, Actionnaire<br/>
          <a href="#actor3">Joseph Ghoul</a>, Actionnaire<br/>
          <a href="#actor4">&Eacute;lodie Mourier</a>, Actionnaire<br/>
          <a href="#actor6">Jérôme Rateau</a>, Actionnaire</p>
        <hr/>
        <h3 id='actor2'>Alexandre Galdéano</h3>
        <h4>Responsable Production</h4>
        <p>Suite à deux années en classes préparatoires mathématiques et 
          informatique, il suit une formation d’ingénieur informatique. Les 
          sciences et les technologies le passionnent.</p>
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>

        <hr/>
        <h3 id='actor5'>Laura Prémillieu</h3>
        <h4>Responsable Informatique</h4>
        <p>Après l’obtention d’un DUT en informatique, elle est à présent 
          ingénieur informatique en devenir. Grâce à une formation orientée vers
          la technique, elle a acquis une expérience diversifiée en informatique
          et continuer à découvrir les avancées l’attire au plus haut point.</p>

        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>
        <hr/>
        <h3 id='actor7'>Tristan Salvadori
        </h3>
        <h4>Gestionnaire et Responsable Commercial</h4>
        <p>Titulaire d’un BTS en commerce International et d’une Licence en 
          Sciences de Gestion, il est actuellement en Master en Affaires 
          Internationales. Avec plusieurs expériences au sein de PME, il a 
          développé un goût prononcé pour l’entrepreneuriat.</p>
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>
        <hr/>
        <h3 id='actor1'>Corinne Fagno</h3>
        <h4>Actionnaire</h4>
        <p>Après l’obtention d’un DUT en informatique, elle suit une formation 
          pour devenir ingénieur en informatique. Au cours de sa formation elle 
          a pu acquérir de l’expérience en informatique. Elle s’est toujours 
          intéressée aux nouvelles technologies qui l’attirent particulièrement.</p>
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>

        <hr/>
        <h3 id='actor3'>Joseph Ghoul</h3>
        <h4>Actionnaire</h4>
        <p>Après deux années en classes préparatoires, il intègre l’ENTPE (Ecole
          Nationale des Travaux Publics de l’Etat). La modélisation et la 
          construction ont toujours comptés parmi ses centres d’intérêts.</p>
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>

        <hr/>
        <h3 id='actor4'>&Eacute;lodie Mourier</h3>
        <h4>Actionnaire</h4>
        <p>Suite à deux années en classes préparatoires scientifiques, elle suit
          une formation pour devenir ingénieur spécialisée en informatique. 
          L’innovation et les nouvelles technologies ont pavées son parcours et 
          l’intéressent tout particulièrement.</p>
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>
        <h3 id='actor6'>Jérôme Rateau
        </h3>
        <h4>Actionnaire</h4>
        <p>Il a suivi deux années de formation en gestion des petites et 
          moyennes entreprises durant lesquelles il a eu l’occasion de réaliser 
          plusieurs projets professionnels et stages. Il a ensuite poursuivit sa
          formation pendant un an en Norvège avant de rejoindre le master 
          management des affaires internationales à l’IAE de Lyon.</p>
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>
        <hr/>
        <img id="compo" class="img-responsive" src="Contenu/Images/organisation.jpg" alt="Copyright all reserved" />
        <a href="#titre"> <span class="glyphicon glyphicon-arrow-up"></span> </a>
      </div>
    </div>
  </div>
</div>
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