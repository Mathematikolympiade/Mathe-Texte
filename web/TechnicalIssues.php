<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Technische Fragen</h2></div>
   <div class="row"><div  class="col-sm-12">

<p>Jeder einzelne Beitrag (Artikel oder Problem) wird als <b>Record</b>
oder <b>Datensatz</b> bezeichnet.  Beiträge müssen als <b>LaTeX-Quelle</b> zur
Verfügung stehen. Aus Kompatibilitätsgründen empfehlen wir dringend, dabei das
semantische Markup entsprechend unserer <a href="EditionRules.php"
>Editions-Regeln</a> so weit als möglich zu verwenden.

<h3>Identifizierung von Datensätzen</h3>

<p>Jeder Datensatz hat eine <b>eindeutige ID</b>, die das Muster
(\w+)-(\d\d)-(\d+) (beitragender-jahr-nr) matcht.  Zu jedem Datensatz gibt es
wenigstens die Dateien <tt>(ID).tex</tt> (Hauptdatei des Datensatzes; in
einigen Fällen auch <tt>(ID)_en.tex</tt>, wenn nur eine englischsprachige
Version vorliegt) und Meta-Informationen im RDF-Format (unter der URI
&gt;http://kosemnet.de/Data/Article/(ID)&lt; für Aufsätze und
&gt;http://kosemnet.de/Data/Aufgabe/(ID)&lt; für Probleme). In einem (optional
vorhandenen) Verzeichnis <tt>(ID)</tt> kann weiteres Material zu diesem
Datensatz - etwa Bilder - enthalten sein.

<p>Die <b>Hauptdatei</b> <tt>(ID).tex</tt> des Datensatzes enthält eine
aktuelle <b>Attribution Section</b>, deren Inhalt im Abschnitt
<a href="LegalIssues.php" >Rechtliche Fragen und soziale Regeln</a> näher
beschrieben ist.

<p> Als Meta-Informationen sind folgende weiteren Informationen über die
  einzelnen Aufsätze gesammelt:
<ul>
<li> Beschreibung (Quelle, Titel, Autor, Maintainer, soweit anwendbar),
<li> Schlüsselworte und Inhaltsinformationen,
<li> Schwierigkeit und Zielgruppe des Materials
<li> Aufzeichnung von Verwendungsnachweisen
<li> Status des Datensatzes (aktuell, Vorgänger von ...). Diese Funktion ist
  noch nicht endgültig spezifiziert.
<li> Aufzeichnung von Änderungen (Änderungen, Geschichte des Materials),
</ul>
Die <a href="MetaInformations.php">Meta-Informationen</a> können aus einem
RDF Triple Store heruntergeladen oder über einen Sparql Endpunkt durchsucht
werden.

<p><b>Ein Problem kann für begrenzte Zeit als gesperrt markiert werden</b>,
wenn es in einem Wettbewerb eingesetzt werden soll. Dies wird durch einen
Eintrag <tt>ksn:lockedUntil "..."</tt> in den Meta-Informationen dargestellt.

<p>Jeder Datensatz hat einen <b>Maintainer</b>, der (im Sinne eines &#39;primus
inter pares&#39;) für die Verwaltung und Qualitätssicherung des Datensatzes und
seiner Modifikationen verantwortlich ist. Der (erste) Maintainer eines
Datensatzes ist gewöhnlich der Autor oder der Projektbeteiligte, welcher den
Datensatz anlegt.

<h3>StyleFiles</h3>

<p>Um die Kompatibilität zwischen den LaTeX-Quellen der einzelnen Beiträge zu
sichern, empfehlen wir unseren Autoren,
den <a href="EditionRules.php">Editions-Richtlinien</a> unbedingt so genau wie
möglich zu folgen.  Diese beziehen sich auf eine Reihe von StyleFiles
im <b>StyleFiles</b>-Verzeichnis der KoSemNet Datenbasis. Sie sollten dieses
Verzeichnis in den TEXINPUTS Pfad ihrer lokalen LaTeX-Installation aufnehmen.

<h4>Inhalt des StyleFile-Verzeichnisses</h4>

<table align="center" width="90%">
<tr><td><tt>ko-math.sty</tt>  <td> Definitionen für zusätzliches semantisches
    mathematisches Markup (Erweiterung von amsmath)
<tr><td><tt>ko-preface.tex</tt>  <td> Preface-Datei für Probleme
<tr><td><tt>kosemnet.sty</tt> <td> Einige allgemeine Definitionen für Artikel 
</table>

<h4>Probleme</h4>

<p>Die Grundstruktur der <b>Hauptdatei</b> <tt>(ID).tex</tt> eines Problems
muss strengen syntaktischen Vorgaben folgen, damit sie automatisch verarbeitet
werden kann. Diese Struktur ist so angelegt, dass die Datei als einzelne
LaTeX-Datei - zusammen mit <tt>ko-preface.tex</tt> als preface Datei -
selbstständig übersetzt werden kann.  Diese Hauptdatei muss deshalb folgende
Grundstruktur aufweisen:

<pre>
\input ko-preface
\key{Die ID des Problems}

\begin{problem} ..
\end{problem}

\begin{solution} ..
\end{solution}

\begin{comment} ..
\end{comment}

\begin{attribution} ..
\end{attribution}

\end{document}
</pre>
<p>Die Abschnitte &#39;solution&#39; und &#39;comment&#39; sind optional.

<h4>Artikel</h4>

Artikel sind im gewöhnlichen LaTeX-Format erstellt. Bitte fügen Sie den
Verweis \kosemnetlicensemark in den \title{...} ein. Am Ende des Artikels muss
eine Attribution Section angelegt werden, so dass ein Artikel gewöhnlich mit
den Umgebungen 
<pre>
\begin{comment} ..
\end{comment}

\begin{attribution}
\end{attribution}

\end{document}
</pre>
endet, wobei &#39;comment&#39; optional ist.

<h4>Attribution</h4>

In der Attribution Section sind alle wichtigen Beiträge zum Material mit
Zeitstempel und Kürzel des Autors oder Maintainers zu vermerken, um die
einzelnen Beitragenden angemessen zu würdigen. 

   </div>
</div>


';
echo showPage($content);

?>
