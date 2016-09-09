<?php
include("../lib.php");
//$text = file_get_contents("file");

$text = fopen("write-file2", "w");

fputs($text,"Какойто текст w".PHP_EOL,10);

fclose($text);
?>