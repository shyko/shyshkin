<?php
     function number_to_text($x) {
     $x = (int) $x;
     $x <= 5;
     switch($x) {
     	case 1:
     	     print "first";
     	     break;
     	case 2:
     	     print "second";
     	     break;
     	case 3:
     	     print "third";
     	     break;
     	case 4:
     	     print "fourth";
     	     break;
     	case 5:
     	     print "fifth";
     	     break;
     	default:
     	     print "Unknown command"; 
     }
}
$a = number_to_text(3);
print $a;


