<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
session_start();
$linkContent1 = "content1.php";
if(isset($_SESSION['open']) && $_SESSION['open'] == 'yes'){
	echo "This is the content2.php <br>";
	echo "Click " . "<a href='".$linkContent1."'>here</a>" . " back to content1<br>";
}else {
	header ("Location: login.php", true);
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
