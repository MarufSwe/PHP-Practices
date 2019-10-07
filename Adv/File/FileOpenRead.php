<?php

$file = fopen("OpenRead.txt", "r") or die("file not found");
echo fread($file, filesize("OpenRead.txt"));
fclose($file)

?>