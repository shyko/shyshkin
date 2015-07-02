<? 

   print "<table border=1><tr>";
      for ($i=1; $i<=20; $i++) {
                 for ($j=1; $j<=20; $j++) 
                     print "<td>" . ($i*$j) . "</td>";
                 if ($i !=20)  print "</tr><tr>";

         }

     print "</tr></table>";
?>
