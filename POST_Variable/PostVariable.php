<?php

$_POST["username"];
$_POST["password"];

if ($_POST["username"] == "maruf" && $_POST["password"] == "123") 
{
	echo "User name and passwrd is correct";
}
else
{
	echo "User name and passwrd is not correct!!";
}
?>