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
$input = array(
	"min-mc" => $_GET["min-multiplicand"],
	"max-mc" => $_GET["max-multiplicand"],
	"min-ml" => $_GET["min-multiplier"],
	"max-ml" => $_GET["max-multiplier"]
	);
	if ($input["min-mc"] > $input["max-mc"]){
		echo "Minimum multiplicand larger than maximum";
	} else if ($input["min-ml"] > $input["max-ml"]) {
		echo "Minimum multiplier larger than maximum.";
	}
		
	echo $input['min-mc'];


?>

</body>
</html>
