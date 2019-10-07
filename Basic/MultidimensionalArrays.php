<?php

$Country = array(array("Germany", 6.5, 9.23),
                 array("Canada", 5.5, 12),
                 array("Australia", 7, 15));

echo "Country,".'  ', "IELTS,".'  ', "Income per hour".'  ', "<br>";

echo $Country[0][0].' ';  echo $Country[0][1].' ';  echo $Country[0][2].' '. "<br>"; 
echo $Country[1][0].' ';  echo $Country[1][1].' ';  echo $Country[1][2].' '."<br>";
echo $Country[2][0].' ';  echo $Country[2][1].' ';  echo $Country[2][2].' '
?>