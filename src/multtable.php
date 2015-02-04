<?php
error_reporting(E_All);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>multtable</title>
</head>
<body>

<?php
$stopFlag = false;
$someInput = ($_GET);
if (notHave("min-multiplicand", $someInput)){
	echo "Missing parameter min-multiplicand <br>";
	$stopFlag = true;
	}
if (notHave("max-multiplicand", $someInput)){
	echo "Missing parameter max-multiplicand <br>";
	$stopFlag = true;
	}
if (notHave("min-multiplier", $someInput)){
	echo "Missing parameter min-multiplier <br>";
	$stopFlag = true;
	}	
if (notHave("max-multiplier", $someInput)){
	echo "Missing parameter max-multiplier <br>";
	$stopFlag = true;
	}
	
if ($stopFlag) { exit(0);}	
	
$input = array(
	"min-mc" => $_GET["min-multiplicand"],
	"max-mc" => $_GET["max-multiplicand"],
	"min-ml" => $_GET["min-multiplier"],
	"max-ml" => $_GET["max-multiplier"]
	);
foreach ($_GET as $key => $value) {
	if (!is_numeric($value)){
		echo $key . " must be an integer <br>";
		$stopFlag = true;
	} else if ((((float)$value) * 10) % 10 != 0){
		echo $key . " must be an integer <br>";	
		$stopFlag = true;
		} 
	}
	
if ($stopFlag) { exit(0);}
	
if ($input["min-mc"] > $input["max-mc"]){
		echo "Minimum multiplicand larger than maximum";
		$stopFlag = true;
	} else if ($input["min-ml"] > $input["max-ml"]) {
		echo "Minimum multiplier larger than maximum.";
		$stopFlag = true;
	}
if ($stopFlag) { exit(0);}
	
	echo '<p>
	<table border="1">
	<tr><td>';
	for ($index = $input['min-ml']; $index <= $input['max-ml']; ++$index) {
		echo '<td>' . $index;
	}
	for ($index = $input['min-mc']; $index <= $input['max-mc']; ++$index){
		echo '<tr><td>' . $index;
		for ($index1 = $input['min-ml']; $index1 <= $input['max-ml']; ++$index1) {
			echo '<td>' . $index * $index1;
		}
	}
function notHave($testKey, $arr){
	foreach($arr as $key => $value){
		if($testKey == $key) {
			return false;
		}
	}
	return true;
}			
	echo '</table>';	
?>
</body>
</html>
