<?php
    $i=1;
    print "<table><tr>";
    do {
     $j=1;
     do {
          print "<td>" . ($i*$j) . "</td>";
          $j++;
     } while ($j<=10);
     if ($i!=10) print "</tr><tr>";
     $i++;
    } while ($i<=10);
    print "</tr></table>";