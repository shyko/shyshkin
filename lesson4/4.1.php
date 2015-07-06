<?php
            
    switch ($_GET['operator']) {
        case 'sqrt':
                   $a=sqrt($_GET['number']);
                   print $a;
                   break;
        case 'pow':
                   $x=pow($_GET['number'], 2); 
                   print $x; 
                   break;
                               }

?>

