<?php 

//setcookie("visitor", "", time() - 3600);  //Cookie destroy by -3600seconds

if (!isset($_COOKIE["visitor"])) {

	setcookie("visitor", "1", time()+86400, "/") or die("Could not set cookie!");  //24hours = 86400seconds
	echo "First time You visit this website";

}
else
{
	echo "You are not First time in this website!";
}



?>