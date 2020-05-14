<?php 

ini_set("display_errors",1);

$doc = DOMDocument::load("autor-index.xml");
print $doc->saveXML();

?>
