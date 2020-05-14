use XML::LibXML;
use strict;

my $debug=1;
my $dataDir="books";
my $parser=new XML::LibXML;

# read all data files and build a single document from them
my $allBooks=parseAllData($dataDir);

#create different indexes
index2XML(createIndex($allBooks,"author"),"author-index.xml");
index2XML(createIndex($allBooks,"title"),"title-index.xml");
index2XML(createIndex($allBooks,"keywords"),"keyword-index.xml");


# use xmllint -format -encode UTF-8 for translation to UTF-8

#=========== end main ==============

sub parseAllData {
  my $dir=shift;
  my $doc=new XML::LibXML::Document;
  $doc->setEncoding("ISO-8859-1");
  my $root=$doc->createElement("BookList");
  $doc->setDocumentElement($root);
  map {
    #print "Loading $_\n" if $debug;
    my $u=$parser->parse_file($_);
    $root->appendChild($u->documentElement);
  } <$dir/*.xml>;
  return $doc;
}

sub createIndex {
  my ($doc,$tagname)=@_;
  my $index;
  map {
    my $id=$_->getAttribute("id");
    my @l=$_->getChildrenByTagName($tagname);
    map {
      map push(@{$index->{$_}}, $id), split(/\s*;\s*/, $_->textContent);
    } @l;
  } $doc->findnodes("BookList/Book");
  return $index;
}

sub index2XML {
  # save index as HashList xml
  my ($index,$outfile)=@_;
  my $doc=new XML::LibXML::Document;
  $doc->setEncoding("ISO-8859-1");
  my $root=$doc->createElement("HashList");
  $doc->setDocumentElement($root);
  map {
    my $node=$doc->createElement("entry");
    $node->setAttribute("value",$_);
    map {
      my $ref=$doc->createElement("CRef");
      $ref->setAttribute("ref",$_);
      $node->appendChild($ref);
    } @{$index->{$_}};
    $root->appendChild($node);
  } (sort keys %$index);
  print "Creating $outfile\n";
  $doc->toFile($outfile,1);
}

