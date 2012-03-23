<html>
<head>
<title>PHP homework - is prime</title>
<style>
.red{
color:red
}
.blue{
color:blue
}
</style>
</head>
<body>
<?php
require_once("functions.php");

if(isset($_GET['number']))
{
	$number=$_GET['number'];
	
	if(!is_numeric($number))
		echo '<p class="red">The parameter is not a number</p>';
	elseif($number<=1 || $number>19999)
		echo '<p class="red">The parameter is not within the range (1,19999]</p>';
	elseif(is_prime($number))
		echo "<p>The number $number is prime!</p>";
	else 
		echo "<p class=\"blue\">The number $number is NOT prime!</p>";
}
?>
</body>
</html>
