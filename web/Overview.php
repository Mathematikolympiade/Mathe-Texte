<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
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

<p>Im Projekt wird ebenfalls ein <b>Bereich "lokale Aktivitäten"</b> verwaltet,
der wertvolle Materialien enthält, welche urheberrechtlichen Einschränkungen
unterliegen oder (noch) nicht entsprechend den Regularien des Projekts
aufbereitet wurden und deshalb nur innerhalb des Projektteams verfügbar sind.

<p>Die <b>Kommunikation</b> innerhalb des Projekts wird durch die (archivierte)
<a href="http://lists.informatik.uni-leipzig.de/mailman/listinfo/kosemnet"
>KoSemNet Mailingliste</a> unterstützt, die offen ist für alle Interessierten.
<p>Die gemeinsame <b>Datenbasis</b> wird über ein git-Repo verwaltet und ist
in vollem Umfang allein Projektmitgliedern zugänglich. Die dort gesammelten
Daten und Werke können sowohl durch Projektmitglieder als auch Nicht-Mitglieder
genutzt werden.
<p>Beiträge zur Datenbasis sind willkommen, wenn diese von den Autoren unter
den Bedingungen der
<a href="http://creativecommons.org/licenses/by/3.0/deed.de" >Creative Commons
Attribution License</a> (CC-BY) dem Projekt zur Verfügung gestellt werden.
<p>Details sind im Abschnitt <a href="LegalIssues.php">rechtliche Fragen und
soziale Regeln</a> des Projekts ausgeführt.
</table>

   </div>
</div>


';
echo showPage($content);

?>
