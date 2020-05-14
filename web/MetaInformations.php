<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 * Last Update: 2020-05-14
 */

include_once("layout.php");

$content='      
   <div class="row" align="center"><h2>Meta-Informationen</h2></div>
   <div class="row"><div  class="col-sm-12">

<p>Meta-Informationen werden
im <a href="http://de.wikipedia.org/wiki/Resource_Description_Framework"
>RDF-Format</a> als <a href="http://linkeddata.org/" >Linked Data</a> zur
Verfügung gestellt und können auf die (in jenen Kreisen) bekannte Weise aus
den RDF-Quellen im github Repo durchsucht werden.  Es ist geplant, auch wieder
einen <a href="http://de.wikipedia.org/wiki/SPARQL" >Sparql Endpunkt</a>
einzurichten.</p>

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

<p>Mehr zum Aufsetzen eines eigenen RDF-Stores ist
im <a href="http://symbolicdata.github.io/LocalSparqlEndpoint" >Wiki des
SymbolicData Projekts</a> zu finden.</p>

   </div>
</div>


';
echo showPage($content);

?>
