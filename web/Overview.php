<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 * Last Update: 2020-05-14
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Kurze Übersicht</h2></div>
   <div class="row"><div  class="col-sm-12">

Das Hauptanliegen des Projekts besteht in folgenden Zielen:
<ul>

<li>Beförderung der Vernetzung innerhalb einer Gemeinschaft von Enthusiasten,
die sich die Förderung mathematischer Nachwuchstalente im Schulalter auf die
Fahnen geschrieben haben.</li>

<li>Aufbau einer Kommunikationsinfrastruktur, über die ein Austausch zu
interessierenden Fragen sowie die regelmäßige Information über Aktivitäten der
einzelnen Projektbeteiligten erfolgt.</li>

<li>Sammeln und Pflegen einer gemeinsamen Datenbasis von Problemen
(<b>Problem-Bereich</b>) und mathematischen Miniaturen
(<b>Artikel-Bereich</b>), die in der Förderung mathematischer Nachwuchstalente
nützlich sind und genutzt werden.</li>
</ul>
<p>Die gemeinsame <b>Datenbasis</b> wird über zwei git-Repos verwaltet. Das
  Repo für Probleme ist in vollem Umfang allein Projektmitgliedern zugänglich,
  das Repo für Aufsätze und weitere Materialien ist öffentlich.  Die dort
  gesammelten Daten und Werke können sowohl durch Projektmitglieder als auch
  Nicht-Mitglieder genutzt werden.
<p>Beiträge zur Datenbasis sind willkommen. Details des Beitragens in einer
  Welt urheberrechtlicher Beschränkungen sind im
  Abschnitt <a href="LegalIssues.php">rechtliche Fragen und soziale Regeln</a>
  des Projekts ausgeführt.
</table>

   </div>
</div>


';
echo showPage($content);

?>
