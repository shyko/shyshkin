
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
<form action="" method="POST">
   Table name <input type="text" name="dbname" required><br>
   Login <input type="text" name="login" required><br>
   Password     <input type="password" name="pass" required><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
if ($_POST['dbname'] == 'users1') {
$conn = new PDO('mysql:host=127.0.0.1:3306; dbname=db1', 'root', NULL);
$conn->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec("CREATE TABLE IF NOT EXISTS Users1 (uid int AUTO_INCREMENT,
	                                              name varchar(255),
	                                              password varchar(255),
                                                   PRIMARY KEY (uid))");
print "Table already created" . "<br>" ;
$admin = $conn->prepare("SELECT * FROM Users1 WHERE name = '{$_POST['login']}' AND password = '{$_POST['pass']}'");
$admin->execute(array('name' => $_POST['login'], 'password' => $_POST['pass']));
$adminok = $admin->fetchALL();
if (count($adminok)) {
	print "Welcome admin!";
} else {
	print "Access denied. Unknown login or password";
}
} 
if (isset($_POST['dbname']) && $_POST['dbname'] !== 'users1' ) {
	print "Unknown table name";
}


?>
