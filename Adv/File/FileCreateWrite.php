<?php

//$createFile = fopen("createNew.doc", "w") or die("File not found");   //for create Doc file

$createFile = fopen("createNew.txt", "w") or die("File not found");

$text = "this file create and write by PHP fwrite function";

fwrite($createFile, $text);

fclose($createFile);
?>