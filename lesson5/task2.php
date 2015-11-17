
<html>
<body>
<form method="POST" action="task2.php">
  File name<input type="text" name="text" required><br>
  File content <input type="text" name="content" required>
 <input type="submit" value="Submit">
 </form>
</body>
</html>
<?php
$fl = $_POST['text'];
if (isset($_POST['text'])){
$fp = fopen("task2/$fl", "w+");
$text = $_POST['content'];
fwrite($fp, $text);
fclose($fp);
print 'The file created successfully';
}
?>