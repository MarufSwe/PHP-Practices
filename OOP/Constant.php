<?php

class Engineer{

	public $name = "Maruf";
	const Age = 23;

}

$engObj = new Engineer;

echo $engObj->name; //gonna be work easily
echo $engObj->Age;  // it will not working, cause it need ::

echo Engineer::Age;  //not need anything, and this is fixed.

?>