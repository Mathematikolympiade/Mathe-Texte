use XML::LibXML;

use strict;

my $parser=new XML::LibXML;

my $idHash;
my $people=$parser->parse_file("people-12-12-03.xml");
my $peopleHash;
map $peopleHash->{$_->getAttribute("id")}=getContent($_,"name"), 
  ($people->findnodes("People/Person"));

my $publisher=$parser->parse_file("publishers-12-12-03.xml");
my $publisherHash;
map $publisherHash->{$_->getAttribute("id")}=getContent($_,"name","; ")
  .", ".getContent($_,"city","; "), 
  ($publisher->findnodes("Publishers/Publisher"));

my $reihen=$parser->parse_file("reihen-12-12-03.xml");
my $reihenHash;
map $reihenHash->{$_->getAttribute("id")}=getContent($_,"name","; "), 
  ($reihen->findnodes("Reihen/Series"));

#map print("\n$_: ".$reihenHash->{$_}), (sort keys %$reihenHash);

map fixBookEntry($_), @ARGV;

sub getContent {
  my($node,$tagname,$separator)=@_;
  #print $node->toString();
  my (@l,$s);
  map {
    $s=$_->toString();
    $s=~s:^<$tagname.*?>\s*::s; $s=~s:\s*</$tagname>$::s;
    push @l, $s;
  } $node->getElementsByTagName($tagname);

  return join($separator,@l);
}

sub fixBookEntry {
  my $fn=shift;

  if ($fn=~/mb-80|mb-R1/) { print "Skip $fn\n"; return; }

  print "Process $fn\n";
  my @l;
  my $doc=$parser->parse_file($fn) or die;
  my $root=$doc->getDocumentElement;
  # fix author
  map {
    push @l, $peopleHash->{$_->getAttribute("ref")} 
      if $peopleHash->{$_->getAttribute("ref")};
    $_->parentNode->removeChild($_);
  } $doc->getElementsByTagName("author");
  my $node=$doc->createElement("author");
  $node->appendText(join("; ",@l));
  $root->insertBefore($node,$root->firstChild);
  # fix reihe
  map {
    $_->appendText($reihenHash->{$_->getAttribute("ref")});
  } $doc->getElementsByTagName("series");
  # fix publisher
  map {
    $_->appendText($publisherHash->{$_->getAttribute("ref")});
    $_->removeAttribute("ref");
  } $doc->getElementsByTagName("publisher");
  # fix year
  map {
    $node=$doc->createElement("year");
    $node->appendText($_->textContent);
    $root->replaceChild($node,$_);
  } $doc->getElementsByTagName("date");
  # fix keywords
  map {
    $node=$doc->createElement("keywords");
    $node->appendText(join("; ",split(/\s*,\s*/, $_->textContent)));
    $root->replaceChild($node,$_);
  } $doc->getElementsByTagName("Keywords");

  # propose a nice id

  my $author=lc $doc->findvalue("Book/author");
  my $year=$doc->findvalue("Book/year");
  my $id=proposeId($author,$year);
  print "Proposed Key is $id\n";
  $root->setAttribute("id",$id);
  $idHash->{$id}=1;
  
  # and now make stupid text pattern replacements

  local $_=$doc->toString(1);
  s/<series/<reihe/gs; 
  s/<\/series>/<\/reihe>/gs; 
  s/ISBN>/isbn>/gs;
  s/ISSN>/issn>/gs;
 
  $fn="tmp/$id.xml";
  print "Writing file to $fn\n";
  open(FH,">$fn") or die;
  print FH $_;
  close FH;
}

sub proposeId {
  my ($author,$year)=@_;
  print "Guess Id for $author-$year\n";
  $author=~s/ä/ae/g;
  $author=~s/ö/oe/g;
  $author=~s/ü/ue/g;
  die unless $author=~/^([a-z][a-z][a-z])/; 
  my $id=$1;
  die unless $year=~/(\d\d)$/;
  $id.="-$1-";
  my $cnt=1;
  while ($idHash->{$id.$cnt}) { $cnt++; }
  return $id.$cnt;
}
