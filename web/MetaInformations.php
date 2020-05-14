<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Meta-Informationen</h2></div>
   <div class="row"><div  class="col-sm-12">

<p>Meta-Informationen werden
im <a href="http://de.wikipedia.org/wiki/Resource_Description_Framework"
>RDF-Format</a> als <a href="http://linkeddata.org/" >Linked Data</a> zur
Verfügung gestellt und können auf die (in jenen Kreisen) bekannte Weise über
einen <a href="http://de.wikipedia.org/wiki/SPARQL" >Sparql Endpunkt</a>
durchsucht werden.</p>

<p>Metainformationen zu unseren Artikeln werden als einfache RDF-Datei in den
gängigen Formaten (.ttl = Turtle, .rdf = rdfxml, .json = JSON-RDF) im
<a href="http://lsgm.de/KoSemNet/rdf">RDF-Download-Bereich unserer Website</a>
öffentlich zur Verfügung gestellt. Dies ist zugleich die einfachste Form,
RDF-Metadaten öffentlich verfügbar zu machen. </p>

<p>Metadaten können in einen privaten oder auch
öffentlichen <a href="https://en.wikipedia.org/wiki/Triplestore">RDF-Store</a>
geladen bzw. zur Verfügung gestellt und dann dort auch mit
der <a href="https://de.wikipedia.org/wiki/SPARQL">SPARQL-Anfragesprache</a>
durchsucht werden. Dies entspricht dem klassischen Management von Daten über
eine MySQL Datenbank und die SQL-Anfragesprache, allerdings über einen weltweit
verteilten und öffentlich verfügbaren Datenbestand.  Anfrageergebnisse können
auf ähnliche Weise in lokale Webseiten eingebunden werden, wie dies von
SQL-basierten Datenbanken bekannt ist.</p>

<p>Wir stellen einen solchen RDF-Store für unsere Daten zur Verfügung. Als
Werkzeuge verwenden wir dabei
<a href="http://aksw.org/Projects/OntoWiki.html">OntoWiki</a> als
Präsentationsplattform und die <a href="http://virtuoso.openlinksw.com/"
>Virtuoso Community Edition</a> als Datenbank. </p>

<p>Mehr zum Aufsetzen eines eigenen RDF-Stores ist
im <a href="http://wiki.symbolicdata.org/LocalSparqlEndpoint" >Wiki des
SymbolicData Projekts</a> zu finden.</p>

<p>Weiter zum 
<ul>
<li> <a href="http://lsgm.de/KoSemNet/rdf" >RDF-Download-Bereich unserer
    Website</a></li> 
<li> <a href="http://pcai003.informatik.uni-leipzig.de/kosemnet/" >RDF Triple
Store</a></li>
<li> <a href="http://pcai003.informatik.uni-leipzig.de:8893/sparql" >Sparql
Endpunkt</a></li>
</ul></p>

   </div>
</div>


';
echo showPage($content);

?>
