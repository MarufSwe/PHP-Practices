<?php 

class Employee{

	public $name = "Khan Maruf";
	private $salary = 35000;
	protected $age = 23;
	

	public function getSalary(){  //if i print private value in outside of class then create by function
		return $this->salary;
	}
}


class Age extends Employee{

	function __construct(){
		echo $this->age;  //protected value access by other Class by Inharitence.
	}
}

$age = new Age;

$EmpObj = new Employee;

echo $EmpObj->name;  //name will print cause it is public, but age and salary will not print.

echo $EmpObj->getSalary();


?>