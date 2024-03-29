<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2021-10-13
 */

require 'vendor/autoload.php';
include_once("layout.php");

function getArticles() {
   /* 
<p><dt> <a href="pdf/bauer-06-1.pdf">bauer-06-01</a>, geeignet für: de-10-3
<dd> <b>Autor(en)</b>: David Bauer 
<dd> <b>Titel</b>: Spieltheorie 
<dd> <b>Schlüsselworte</b>: Spiele; Strategien; Heuristiken 
<dd> <blockquote>Nach einer Einführung in Zweipersonenspiele und gewinnerzwingende Strategien werden Zugänge unter methodischen Gesichtspunkten besprochen. Der Aufsatz schließt mit einer Reihe von Olympiadeaufgaben zum Thema.</blockquote>

*/ 
  \EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
  \EasyRdf\RdfNamespace::set('dcterms', 'http://purl.org/dc/terms/');
  \EasyRdf\RdfNamespace::set('ksn', 'http://kosemnet.de/Data/Model#');
  \EasyRdf\RdfNamespace::set('ksnp', 'http://kosemnet.de/Data/Person/');
  \EasyRdf\RdfNamespace::set('ksnt', 'http://kosemnet.de/Data/Tag/');
  $artikel= new \EasyRdf\Graph("http://kosemnet.de/Data/Artikel/");
  $personen= new \EasyRdf\Graph("http://kosemnet.de/Data/Person/");
  $artikel->parseFile("rdf/Artikel.rdf");
  $personen->parseFile("rdf/Personen.rdf");
  // echo $artikel->dump("Turtle");
  $a=array();
  foreach ($artikel->allOfType("dcterms:BibliographicResource") as $v) {
    $id=$v->getUri();
    $content=displayArtikel($v,$personen);
    $a[]=array("sort" => "$id", "content" => $content);
  }
  array_multisort($a);
  $out=''; foreach($a as $v) { $out.=$v["content"]; }
  return $out;
}

function getAutoren($v,$personen) {
  $u=array();
  foreach($v->all('dcterms:creator') as $a) {
    $u[]=$a->get("foaf:name"); 
  }
  return join(", ",$u);
}

function fix($s) {
  $s=str_replace("http://kosemnet.de/Data/Article/", "", $s);
  $s=str_replace("http://kosemnet.de/Data/Tag/", "", $s);
  return $s;
}

function createLink($s) {
    return str_replace("file://rdf/","pdf/",$s);
}

function displayArtikel($v,$personen) { 
  $title=$v->get("dcterms:title");
  $uri=fix($v->getURI());
  $subject=$v->join("dcterms:subject");
  //$created=date_format(date_create($v->get('dcterms:created')),"d.m.Y");
  //$modified=date_format(date_create($v->get('dcterms:modified')),"d.m.Y");
  $audience=fix($v->get("dcterms:audience"));
  $abstract=$v->get("dcterms:abstract");
  $author=getAutoren($v,$personen);
  $asPDF=createLink($v->get("ksn:availableAsPDF"));
  $out='
<div class="row"><div  class="col-sm-12">
<h3><a href="'.$asPDF.'">'.$uri.'</a>: '.$title.'</h3></div></div>
<div class="row"><div  class="col-sm-12">
<p><dl>
<dd> <b>Autor(en)</b>: '.$author.'</dd>
<dd> <b>Inhalt</b>: '.$abstract.'</dd>
<dd> <b>Schlüsselworte</b>: '.$subject.'</dd>
<dd> <b>Geeignet für</b>: '.$audience.'</dd>
</dl></div></div>';
  return $out;
}

$content='      
   <div class="row" align="center"><h2>Kurzübersicht über verfügbare Texte</h2></div>
   <div class="row"><div  class="col-sm-12">

<p>Die folgenden Aufsätze und mathematischen Miniaturen sind Teil der KoSemNet
Datenbasis.

<p> "geeignet für" bedeutet, dass der Text geeigent ist für die Arbeit mit
Schülern der Befähigungsstufe (klasse)-(grad).  "Grad" orientiert sich an der
Schwierigkeit von Aufgaben der Mathematikolympiade (MO) der angegebenen
Klassenstufe und reicht von 1 (MO 1. Stufe) bis 5 (IMO).'.getArticles().'</div>';
echo showPage($content);

?>
