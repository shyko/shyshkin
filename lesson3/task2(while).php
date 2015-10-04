<?php
   $i=1;
   print "<table><tr>";
   while ( $i<= 10) {
   	$j=1;
   	while ($j<=10) {
   		print "<td>" . ($i*$j) . "</td>";
   		$j++;
   	}
   	if ($i!=10) print "</tr><tr>";
   	$i++;
   }