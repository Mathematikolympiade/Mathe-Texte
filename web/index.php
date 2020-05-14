<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Allgemeines zum KoSemNet-Projekt</h2></div>
   <div class="row"><div  class="col-sm-12">
     Die <b>Kommunikation</b> innerhalb des Projekts wird durch die (archivierte)
     <a href="http://lists.informatik.uni-leipzig.de/mailman/listinfo/kosemnet"
	>KoSemNet-Mailingliste</a> unterstützt, die für alle Interessierten
	offen steht.
   </div></div>

   <div class="row"><div  class="col-sm-12">
     Die gemeinsame <b>Datenbasis</b> wird über ein git-Repository verwaltet,
     auf das nur Projektmiglieder Zugriff haben.
   </div></div>

   <div class="row">
     <p><div  class="col-sm-1">
	 <a href="http://creativecommons.org/licenses/by/3.0">
	   <img alt="Creative Commons License" style="border-width:0"
		src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a>
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
     <p><div  class="col-sm-1">
	 <a href="http://creativecommons.org/licenses/by-nd/3.0">
	   <img alt="Creative Commons License" style="border-width:0"
		src="http://i.creativecommons.org/l/by-nd/3.0/88x31.png" /></a>
       </div><div  class="col-sm-1"></div>
       <div class="col-sm-10"><b>Die Öffentlichkeit</b> kann das Material unter den Bedingungen der
	 <a href="http://creativecommons.org/licenses/by-nd/3.0/deed.de"
	    >Creative Commons Attribution-NoDerivs License</a> (CC-BY-ND) in im
	    Wesentlichen unveränderter Form frei verwenden, verbreiten und
	    veröffentlichen.  Mit dieser etwas restriktiveren Regelung soll die
	    Qualität der unter dem Namen "KoSemNet" verbreiteten Materialien
	    gesichert werden.</div>
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
