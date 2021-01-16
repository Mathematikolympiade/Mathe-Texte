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

<p>Meta-Informationen werden im <a
href="http://de.wikipedia.org/wiki/Resource_Description_Framework"
>RDF-Format</a> als <a href="http://linkeddata.org/" >Linked Data</a> zur
Verfügung gestellt und können auf die (in jenen Kreisen) bekannte Weise aus
den RDF-Quellen im <a
href="https://github.com/Mathematikolympiade/Mathe-Texte" >github Repo</a>
durchsucht werden. </p>

<p>Metainformationen zu unseren Artikeln werden als einfache RDF-Datei im <a
href="rdf">RDF-Download-Bereich unserer Website</a> öffentlich zur Verfügung
gestellt. Dies ist zugleich die einfachste Form, RDF-Metadaten öffentlich
verfügbar zu machen. </p>

   </div>
</div>


';
echo showPage($content);

?>
