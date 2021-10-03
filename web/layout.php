<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2015-07-26
 * Last Update: 2020-05-14
 */

function pageHeader() {
  return '
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Das KoSemNet Projekt"/>
    <meta name="author" content="Das KoSemNet Projekt"/>

    <title>Das KoSemNet Projekt</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    
  </head>
<!-- end header -->
  <body>
<div class="container">
  <div class="row">
    <h1 align="center"><a href="index.php">Das KoSemNet Projekt</a></h1><hr>
  </div><!-- end h1 title -->
  <div class="row"> 
    <div class="col-sm-4">
';
}

function pageNavbar() {
  return '
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <li><a href="index.php">Startseite</a></li> 
	    <li> <a href="ArticleList.php">Kurzübersicht über verfügbare Texte</a></li> 
            <li><a href="LegalIssues.php">Rechtliche Fragen und soziale Regeln</a></li> 
            <li><a href="TechnicalIssues.php">Technische Fragen</a></li> 
            <li><a href="EditionRules.php">Editions-Regeln</a></li> 
	    <li> <a href="Papers.php">Präsentationen und Aufsätze zum Projekt</a></li> 
          </ul>
      </div><!-- sidebar end -->
    </div><!-- col-sm-4 end -->
    ';
}

function generalContent() {
  return '
<div  class="col-sm-8">
  <p>Das <b>Ko</b>rrespondenz-<b>Se</b>minar-<b>Net</b>zwerk Projekt entstand
    ursprünglich im Nachgang zu einem Treffen von Gruppen engagierter Förderer
    mathematischer Nachwuchstalente im Schulalter aus Tschechien, der
    Slowakei, Ungarn und Deutschland im März 2004 in Bratislava.</p>

  <p>Nach einer enthusiastischen Anfangsphase sind heute einzelne Personen aus
    verschiedenen Förderzusammenhängen in Deutschland nur noch sporadisch im
    Projekt aktiv. Die Koordinierung der Aktivitäten erfolgt über die LSGM -
    die Leipziger Schülergesellschaft für Mathematik.</p>
</div><!-- col-sm-8 end -->

  </div><!-- row end -->
  <hr/>

';
}

function pageFooter() {
  return '

  <div class="container">
    <div class="footer" align="right">
        <p class="text-muted">&copy; <a href="http://lsgm.de/KoSemNet/index.php">KoSemNet
        Projekt</a> seit 2015 </p>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>';
}

function showPage($content) {
  return pageHeader().pageNavbar().generalContent().($content).pageFooter();
}
