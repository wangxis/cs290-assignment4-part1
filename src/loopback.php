<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>loopback</title>
</head>
<body>

<?php
$input = array();
$parameter = array();
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	$input["TYPE"] = "GET";
	if (!empty($_GET)) {
		foreach ($_GET as $key => $value){
			if($value == "") {
				$value = 'undefined';
			}
			$parameter[$key] = $value;
		}
		$input["parameters"] = $parameter;
	} else {
		$input["parameters"] = null;
	}
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$input["TYPE"] = "POST";
	if (!empty($_POST)) {
		foreach ($_POST as $key => $value){
			if($value == "") {
				$value = 'undefined';
			}
			$parameter[$key] = $value;
		}
		$input["parameters"] = $parameter;
	} else {
		$input["parameters"] = null;
	}
}
	echo json_encode($input);
?>
</body>
</html>
