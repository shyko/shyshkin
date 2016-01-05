<!DOCTYPE html>
<html>
<head>
	<title>Task2</title>
</head>
<body>
<form method="POST" action="">
Login<input type="text" name="login" required><br>
Password<input type="password" name="pass" required>
<input type="submit" value="Submit">
</body>
</html>
<?php
$login = $_POST['login'];
$pass = md5($_POST['pass']);
$conn = new PDO('mysql:host=127.0.0.1:3306; dbname=db1', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM Users1 WHERE name = '$login'");
$stmt->execute(array('name' => $login));
$row = $stmt->fetchAll();
if (!count($row) && isset($_POST['login'])) {
	$newadmin = $conn->prepare('INSERT INTO Users1 VALUES(NULL, :name, :password)');
	$newadmin->bindParam(':name', $login);
	$newadmin->bindParam(':password', $pass);
	$newadmin->execute();
	print "Welcome NEW admin";
} elseif(isset($_POST['login'])) {
	print "This login already taken";
}
?>
ffffffffffffffffffffffffffffff