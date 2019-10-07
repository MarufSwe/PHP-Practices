<?php

$age = array("Maruf"=>"23", "Mamun"=>"27", "Minu"=>"25", "Eya"=>"21");

asort($age);   //Ascending Order
//ksort($age); //Descending Order

foreach ($age as $key => $value) {
	echo "Name: ".$key."&nbsp;&nbsp;&nbsp; Age: " .$value. "<br>";
}
?>