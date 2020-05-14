<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2016-05-27
 */

include_once("layout.php");
require_once("lib/EasyRdf.php");

function getProjectMembers() {
  EasyRdf_Namespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
  $personen= new EasyRdf_Graph("http://kosemnet.de/Data/Personen/");
  $personen->parseFile("rdf/Personen.rdf");
  // echo $mintpersonen->dump("Turtle");
  $a=array();
  foreach ($personen->allOfType("foaf:Person") as $v) {
    $id=$v->getUri();
    $content=displayPerson($v);
    $a[]=array("sort" => "$id", "content" => $content);
  }
  array_multisort($a);
  $out=''; foreach($a as $v) { $out.=$v["content"]; }
  return '
<table width="70%" align="center">'.$out.'
</table>';
}

function displayPerson($v) {
  $a=$v->getUri();
  $name=$v->get('foaf:name');
  $homepage=$v->get('foaf:homepage');
  $out='
<tr><td>'.$name.'</td><td>';
  if (!empty($homepage)) { $out.='<a href="'.$homepage.'">'.$homepage.'</a>';}
  return $out.'</td></tr>';
}

$content='      
   <div class="row" align="center"><h2>Projektbeteiligte</h2></div>
   <div class="row"><div  class="col-sm-12" align="center">'.getProjectMembers().'
   </div>
</div>

';
echo showPage($content);

?>
