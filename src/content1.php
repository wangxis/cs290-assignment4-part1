<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

session_start();
if($_SERVER['REQUEST_METHOD'] != 'POST'){
	header ("Location: login.php", true);
} 
if(session_status() == PHP_SESSION_ACTIVE){
	$link = "login.php";
	$loginLink = "login.php?action=end";
	$linkContent2 = "content2.php";
	if(isset($_POST['username'])){
		if ($_POST['username'] == "" ||$_POST['username'] == null ){
			echo "A username must be entered. Click ";
			echo "<a href='".$link."'>here</a>";
			echo " to return to the login screen.";
		}else {
			$_SESSION['username'] = $_POST['username'];
			if (!isset($_SESSION['visits'])){
				$_SESSION['visits'] = 0;
			}
			$_SESSION['visits']++;
			echo "Hi $_SESSION[username], you have visited this page $_SESSION[visits] times. <br>";
			echo "Click " . "<a href='".$loginLink."'>here</a>" . " to logout <br>";
			echo "Click " . "<a href='".$linkContent2."'>here</a>" . " to content2.php \n";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>content2</title>
</head>
<body>

</body>
</html>
