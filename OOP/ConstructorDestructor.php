<?php 

class UserData{

public $name;
public $age;


public function __construct($name, $age){

$this->name = $name;
$this->age = $age;

echo $this->name.$this->age;
}


public function __destruct(){
	unset($this->name);
	unset($this->age);
}

}

$name = "Maruf";
$age = 23;

$userObj = new UserData($name, $age);


?>