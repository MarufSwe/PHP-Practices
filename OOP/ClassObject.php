<?php 

class Country{

public $name = "Germany  ";
public $curr = "  Euro  ";
public $earnPH = 9.19;


}

$CounObj = new Country;
//echo $CounObj->name;
foreach ($CounObj as $full) {
	echo $full;
}

?>