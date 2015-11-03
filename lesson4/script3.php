<!DOCTYPE html>
<html>
<head>
	<title>Task3</title>
	<style type="text/css">
 table tr td { border: 1px solid black;}
	</style>
</head>
<body>
<?php
print "<table><tr>";
       for ($i=1; $i <=$_GET['rows']; $i++) {
           for ($j=1; $j <=$_GET['columns'] ; $j++)  
           	print "<td>" . rand() . "</td>";
           if ($i!=$rows) print "</tr><tr>";
       }
print "</tr></table>";
?>
</body>
</html>

