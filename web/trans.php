<?php 

require_once("lib/EasyRdf.php");

function trans() {
  EasyRdf_Namespace::set('ksn', 'http://kosemnet.de/Data/Model#');
  $people = new EasyRdf_Graph("http://kosemnet.de/Data/Artikel/");
  $people->parseFile("../RDFData/PersonenKurz.ttl");
  return $people->serialise("rdfxml");

}

echo trans();
