<?php
session_start();
if($_POST['login'] == 'admin' && $_POST['pass'] == 'password') { 
  $_SESSION['auth'] = '1';
  print "Welcome!";
}
if (isset($_GET['logout'])) {
  unset($_SESSION['auth']);
  unset($_POST['login']);
  unset($_POST['pass']);
}
if(isset($_POST['login']) && $_POST['login'] != 'admin' || isset($_POST['pass']) && $_POST['pass'] != 'password') {
  print "Wrong login or password";
}
?>
<html>
<body>
<?php
if (isset ($_SESSION['auth'])) {
  print '<br>' . '<a href="task1.php?logout">Log out</a>';
} else {
?> <form method="POST" action="task1.php">
   Login    <input type="text" name="login">
   Password <input type="password" name="pass">
   <input type="submit" value="Autorization">
   </form>
<?php } 
?>