<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 * Last Update: 2020-05-14
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Allgemeines zum KoSemNet-Projekt</h2></div>
   
   <div class="row"><div  class="col-sm-12">
     Die gemeinsame <b>Datenbasis</b> wird über zwei git-Repositories verwaltet.
     Auf das interne Repo mit Aufgaben und Lösungen haben nur Projektmiglieder
     Zugriff.
     Das <a href="https://github.com/Mathematikolympiade/Mathe-Texte">öffentliche
     Repo</a> mit mathematischen Miniaturen und weiteren Materialien wird bei
     github gehostet. 
   </div></div>

   <div class="row">
     <p><div  class="col-sm-2" style="text-align:center">
	 <a href="http://creativecommons.org/licenses/by/3.0">
	   <img alt="Creative Commons License" style="border-width:0"
		src="images/CC-BY.png" /></a>
       </div><div  class="col-sm-1"></div>
       <div class="col-sm-10"><b>Projektmitglieder</b> können die Materialien (Probleme
	 und Artikel im LaTeX-Format) unter den Bedingungen der
	 <a href="http://creativecommons.org/licenses/by/3.0/deed.de" >Creative
	   Commons Attribution License</a> (CC-BY) frei weiterentwickeln,
	   verwenden, verbreiten und veröffentlichen.  Die Rückgabe der
	   weiterentwickelten Materialien an das Projekt ist - unter
	   ausdrücklicher Betonung einer entsprechenden Erwartungshaltung - in
	   die Entscheidung der Autoren gestellt. </div>
   </div>

   <div class="row">
     <p><div  class="col-sm-2" style="text-align:center">
	 <a href="http://creativecommons.org/publicdomain/zero/1.0">
	   <img alt="Creative Commons License" style="border-width:0;
		width:3em; text-align:center"
		src="images/CC-0.png" /></a>
       </div><div  class="col-sm-1"></div>
       <div class="col-sm-10"><b>Die Öffentlichkeit</b> kann das Material unter den Bedingungen der
	 <a href="https://creativecommons.org/publicdomain/zero/1.0/deed.de"
	    >Creative Commons Zero License</a> (CC-0) frei verwenden,
	    verbreiten und veröffentlichen.  Es wird allerdings erwartet, dass
	    dies fair geschieht, d.h. unter Nennung der Quelle und veränderte
	    Texte nur dann unter dem Namen des Erstautors veröffentlicht
	    werden, wenn dies mit diesem abgesprochen ist.</div>
   </div>

   <div class="row">
     <p><div class="col-sm-12"><b>Details</b> sind im
	   Abschnitt <a href="LegalIssues.php" >Rechtliche Fragen und soziale
	   Regeln</a> des Projekts ausgeführt.
       </div>
   </div>
</div>


';
echo showPage($content);

?>
