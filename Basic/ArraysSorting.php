<?php

//$country = array("Bangladesh","Germany", "Australia", "Zimbabwe","Canada");
$country = array(43,24,55,1,3,85,33,0,1);

sort($country);
//rsort($country);  //reverse ordering

$arrayLength = count($country);

for ($i=0; $i<$arrayLength; $i++) { 

	echo $country[$i]."<br>";
}


/*
foreach ($country as $name) {   //All data print by foreach
	echo $name."<br>";
}
*/

?>