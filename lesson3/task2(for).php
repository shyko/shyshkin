<?php 
    print "<table><tr>";
    for ($i=1; $i <=10 ; $i++) { 
    	for ($j=1; $j <=10 ; $j++)  
    	     print "<td>" . ($i*$j) . "</td>";
    	 if ($i!=10) print "</tr><tr>";
    }
    print "</tr></table>";
