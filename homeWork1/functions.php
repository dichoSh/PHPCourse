<?php
function is_prime($number){
	if($number<2)
	throw new Exception("The number must be greater then 1");
	if($number==2)
		return true;
	elseif($number %2==0) 
		return false;
	else 
		for($i=3;$i<=sqrt($number);$i++){
			if($number % $i==0) return false;
		}
	return true;
}