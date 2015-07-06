<?php
         

       print "<table border=1 padding=5><tr>";
              $x=$_GET['number1'];
              $y=$_GET['number2'];
              for ($i=1; $i<=$x; $i++) {
              for ($j=1; $j<=$y; $j++) 
                   print "<td>" . rand() . "</td>";
              if ($j !=$y) print "</tr><tr>";  
               }
       print "</tr></table>" ;                                         









?>