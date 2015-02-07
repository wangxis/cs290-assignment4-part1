<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
session_start();
if(isset($_GET['action']) && $_GET['action'] == 'end'){
	$_SESSION = array();
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>login</title>
</head>
<body>
<form action="content1.php " method="POST">
Enter username <input type="text", name="username">
<input type="submit", value="Login">

</form>

</body>
</html>
