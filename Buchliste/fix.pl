map action($_), @ARGV;

sub action {
  my $fn=shift;
  open(FH,$fn) or die;
  local $/;
  $_=<FH>;
  close FH;
  s/ref="deutsch"/ref="deutsch-tb"/s;
  open(FH,">$fn");
  print FH;
  close FH;
}
