<html>
<head>
<title>PHP homework - array</title>
</head>
<body>
<?php
require_once("functions.php");

function find_3_prime($array,$nthPrime=3){
	$index=0;
	foreach($array as $value){
		if(is_prime($value))
			$index++;
		if($index==$nthPrime){
			echo "The $nthPrime prime is: $value";
			break;
		}
	}
}

function check_exists($array,$numbers){
	foreach($numbers as $number){
		if(in_array($number,$array)) 
			echo "<p>The numnber $number exist in the array</p>";
		else 
			echo "<p>The numnber $number does not exist in the array</p>";
	}
}

$randomArray=range(20,1000,37);
$numbers=array(146,248,871);

find_3_prime($randomArray);

check_exists($randomArray,$numbers);
?>
<body>
</html>