<?php

session_start();

$name = $_SESSION["userName"];
$pass = $_SESSION["password"];

echo $name ."<br>";
echo $pass;

//session_destroy();  //for Session Destroy Function

?>