<?php
     $numbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
     print "<table><tr>";
     foreach ($numbers as $i) {
     	foreach ($numbers as $j)
     		print "<td>" . ($i*$j) . "</td>";
     	if ($i<=10) print "</tr><tr>";
     }
     print "</tr></table>";