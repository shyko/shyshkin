<!DOCTYPE html>
<html>
<head>
	<title>Task3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
td {background-color: lightgreen;
   }
  </style>
</head>
<body>
<table class="table table-bordered">
<?php
print "<tr>";
       for ($i=1; $i <=$_GET['rows']; $i++) {
           for ($j=1; $j <=$_GET['columns'] ; $j++)  
           	print "<td>" . rand() . "</td>";
           if ($i!=$rows) print "</tr><tr>";
       }
print "</tr>";
?>
</table>
</body>
</html>

