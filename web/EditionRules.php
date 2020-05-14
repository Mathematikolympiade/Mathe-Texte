<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Editions-Regeln</h2></div>
   <div class="row"><div  class="col-sm-12">

<p>Bitte beachten Sie auch die <a href="TechnicalIssues.php">technischen
Informationen</a> über die Gesamtstruktur der KoSemNet Datenbasis und die Rolle
der Info-Records zu den einzelnen Datensätzen im Speziellen.

<h3>Artikel-Bereich</h3>

<p>Wir akzeptieren nur LaTeX-Beiträge, die sich allein unter Verwendung weit
verbreiteter Pakete vollständig übersetzen lassen. Zur Präzisierung dieser
Definition finden Sie im StyleFiles-Verzeichnis der KoSemNet Datenbasis eine
Reihe von StyleFiles mit <tt>\usepackage</tt>-Befehlen und weiterem
mathematischem Markup. Wir empfehlen, so weit wie möglich allein diese
StyleFiles für Ihre Beiträge zu verwenden.

<p>Die einzelnen StyleFiles enthalten Markup-Definitionen zu folgenden
Problemkreisen:

<p>
<table align="center" border cellpadding=4 width="80%">

<tr><td> <tt>ko-math.sty</tt> <td> usepackage-Definitionen für mathematisches
Markup (basierend auf amsmath), einige weitere nützliche Kürzel für
mathematisches Markup und verschiedene (sprachabhängige) Theorem-Umgebungen.

<tr><td> <tt>ko-graf.sty</tt><td> Frank Görings erster Hack einer bequemen
Schnittstelle zum pspicture-Paket für Inline-Bilder.

<tr><td> <tt>kosemnet.sty</tt><td> Grundlegende allgemeine Definitionen
(Lizenzvermerk, Definition der comment und attribution Section etc.).

<tr><td> <tt>ko-preface.tex</tt><td> LaTeX-Vorspann, der einer LaTeX-Datei des
Problem-Bereichs voranzustellen ist, um diese als eigenständige LaTeX-Datei
übersetzen zu können.
</table>

<p>
Insbesondere ermuntern wir Sie, das sematische geometrische Markup (schreiben
Sie etwa $\ksegment{AB}$ statt $|AB|$ für die Strecke AB) sowie die
semantischen Zahlbereichsdefinitionen in <tt>ko-math.sty</tt> zu verwenden.

<p>Jeder Text hat eine <b>eindeutige ID</b> der
Form <tt>(name_des_authors)-(jahr)-(nr)</tt>, die folgende regulären Ausdrücke
matchen:
<ul>
<li> name_des_authors: <tt>[a-z]+</tt>
<li> jahr: <tt>\d\d</tt> (die beiden letzten Ziffern des Jahrs der
Einreichung)
<li> nr:  <tt>[1-9]</tt>
</ul>

<p>Zu jeder solchen ID gibt es eine Hauptdatei <tt>(ID).tex</tt> des Textes
und (optional) ein <b>Unterverzeichnis</b> <tt>(ID)</tt> mit weiterem Material
zu diesem Datensatz sowie einen <b>RDF-Eintrag</b> mit Meta-Informationen zum
Beitrag.

<p>Die allgemeine Struktur der LaTeX-Datei <tt>(ID).tex</tt> orientiert sich
an der folgenden Form:

<p><table width="80%" border align="center" cellpadding="20" bgcolor="yellow">
<tr><td><pre>
\documentclass[11pt]{article}
\usepackage{ko-math,kosemnet,ngerman,graphicx} % for example

\title{ ... \kosemnetlicensemark}
\author{ ... }
\date{ ... }

\begin{document}
\maketitle

Der Text

Evtl. eine ohne weitere Hilfsmittel (insb. ohne bibtex) übersetzbare
Bibliographie.

\begin{comment}
  optional, z.B. Vermerk über noch offene Bearbeitungsschritte 
\end{comment}

\begin{attribution}
Angabe des eigenen Beitrags zum Text (Name und Datum) oder Angabe über
bekannte Beiträge anderer zu diesem Text, z.B. 

graebe (2004-09-09): Eingebracht in KoSemNet
\end{attribution}

\end{document}
</pre>
</table>

<h3>Problem-Bereich</h3>

Wir akzeptieren nur LaTeX-Beiträge in der speziellen KoSemNet
Problem-Struktur, d.h. die nach folgendem Muster aufgebaut sind:

<p><table width="80%" border align="center" cellpadding="20" bgcolor="yellow"> 
<tr><td><pre>
\input{ko-preface}

\key{ - Die ID des Problems - }

\begin{problem}
Die Problemformulierung / Aufgabenstellung
\end{problem}

\begin{solution}
Die Lösung (oder "to be added" / "zu ergänzen")
\end{solution}

\begin{comment}
optional, Kommentare über das Problem, Erfahrungen, wie es von verschiedenen
Zielgruppen bewältigt wurde usw.
\end{comment}

\begin{attribution}
Angabe des eigenen Beitrags (Name und Datum) oder Angabe über
bekannte Beiträge anderer, z.B. 

schueler (2004-12-03): Problemstellung eingebracht in KoSemNet
\end{attribution}

\end{document}
</pre>
</table>

<p>
Nur so aufgebaute Dateien können automatisch verarbeitet werden, z.B. von
Perl-Werkzeugen aus dem Tools-Bereich der Datenbasis, um daraus Aufgabenzettel
für Wettbewerbe, Sammlungen von Aufgaben und Lösungen für Korrektoren und
Sammlungen für andere Zwecke zu erstellen. 

<p>Jede Problem-Datei kann als eigenständige LaTeX-Quelle übersetzt werden,
wenn das StyleFiles-Verzeichnis im TEXINPUTS Suchpfad enthalten ist.

<p>Für das mathematische Markup gelten dieselben Regeln und Hinweise wie
bereits im Abschnitt "Artikel-Bereich" erläutert.

<h3>Bilder</h3>

<p>Es gibt (noch) keine klaren Regeln über die Einbindung von Bildern.  Wir
ermuntern Autoren, Bilder als eps oder (besser) als pspicture Inline-Text
bereitzustellen.  eps-Dateien sind über das graphicx Paket und die Kurzbefehle
\epsPicture und \epsTwoPictures (siehe <tt>kosemnet.sty</tt>) einzubinden.

<p>Dank der Bemühungen von Frank Göring sind bereits viele eps-Bilder in
pspicture Inline-Text umgesetzt worden.  Bitte setzen Sie sich mit ihm in
Verbindung, um Details dazu zu erfahren. Er hat dazu auch das
Paket <tt>ko-graf.sty</tt> als ersten Hack einer bequemeren Schnittstelle zu
pspicture geschrieben.

   </div>
</div>


';
echo showPage($content);

?>
